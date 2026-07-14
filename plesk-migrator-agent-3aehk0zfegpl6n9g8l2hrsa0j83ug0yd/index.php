<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.



// ***** lib/result_encoder_json_plain.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * Class to return results of task execution to client in JSON format.
 */
class ResultEncoderJsonPlain extends ResultEncoder
{
    private $_data;
    private $_itemsCountStack;
    private $_level = 0;

    public function __construct()
    {
        $this->_itemsCountStack = array(0);
    }

    public function startList()
    {
        $this->_itemsCountStack[] = 0;
        $this->_level++;
        $this->_data .= '[';
    }

    public function endList()
    {
        array_pop($this->_itemsCountStack);
        $this->_level--;
        $this->_data .= ']';
    }

    public function startDictionary()
    {
        $this->_itemsCountStack[] = 0;
        $this->_level++;
        $this->_data .= '{';
    }

    public function endDictionary()
    {
        array_pop($this->_itemsCountStack);
        $this->_level--;
        $this->_data .= '}';
    }

    public function addString($str)
    {
        $this->_data .= $this->_encodeString($str);
    }

    public function addBoolean($b)
    {
        $this->_data .= ($b ? 'true' : 'false');
    }

    public function addNull()
    {
        $this->_data .= 'null';
    }

    public function addInt($int)
    {
        $this->_data .= $int;
    }

    public function addRawValue($raw)
    {
        $this->_data .= $raw;
    }

    public function startDictionaryValue($key)
    {
        if ($this->_itemsCountStack[$this->_level] > 0) {
            $this->_data .= ',';
        }
        $this->_data .= $this->_encodeString($key) . ':';
        $this->_itemsCountStack[$this->_level]++;
    }

    public function startListValue()
    {
        if ($this->_itemsCountStack[$this->_level] > 0) {
            $this->_data .= ',';
        }
        $this->_itemsCountStack[$this->_level]++;
    }

    protected function _encodeString($str)
    {
        return json_encode($str);
    }

    public function getData()
    {
        return $this->_data;
    }
}


// ***** lib/result_encoder_json_base64.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * Class to return results of task execution to client in JSON format, where each value is encoded in BASE64.
 * Useful to return data which contains non-UTF-8 sequences (binary data).
 */
class ResultEncoderJsonBase64 extends ResultEncoderJsonPlain
{
    protected function _encodeString($str)
    {
        return '"' . base64_encode($str) . '"';
    }
}


// ***** lib/result_encoder.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * Abstract class which defines methods to return results of task execution to client.
 */
abstract class ResultEncoder
{
    /**
     * Start list.
     *
     * Call startListValue followed by addString, addInt, ..., startList, endList, ..., to put a value into the list.
     * Once all elements are added - call endList function.
     *
     * @return void
     */
    abstract public function startList();

    /**
     * End list. Call after startList function once all list elements are added.
     *
     * @return void
     */
    abstract public function endList();

    /**
     * Start dictionary.
     * Call first startDictionaryValue to add new dictionary key, then any function out of
     * addString, addInt, ..., startList, endList, ... to put a value into the dictionary key.
     *
     * Once all elements are added - call endDictionary function.
     *
     *
     * @return void
     */
    abstract public function startDictionary();

    /**
     * End dictionary. Call after startDictionary function once all dictionary elements are added.
     *
     * @return void
     */
    abstract public function endDictionary();

    /**
     * Add string to results.
     * Use within list or dictionary or on its own.
     *
     * @param string $str
     * @return mixed
     */
    abstract public function addString($str);

    /**
     * Add integer value to results.
     *
     * @param int $int
     * @return void
     */
    abstract public function addInt($int);

    /**
     * Add boolean value to results.
     *
     * @param bool $b
     * @return void
     */
    abstract public function addBoolean($b);

    /**
     * Add null value to results.
     * @return void
     */
    abstract public function addNull();

    /**
     * Add raw (= already encoded) value to the resulting
     * @param $raw
     * @return void
     */
    abstract public function addRawValue($raw);

    /**
     * Start dictionary value with specified key. Call addString, addBoolean, etc. after this function to add value.
     *
     * @param string $key
     * @return void
     */
    abstract public function startDictionaryValue($key);

    /**
     * Start new list item. Call addString, addBoolean, etc., after this function to actually add an element.
     *
     * @return void
     */
    abstract public function startListValue();

    /**
     * Get result of task execution as string. The string should be passed back to client in HTTP response.
     *
     * @return string
     */
    abstract public function getData();

    /**
     * The most simple way to return PHP variable as task execution result.
     * For example, when returning result as JSON,
     * PHP string is encoded as JSON string, boolean is encoded as PHP boolean,
     * PHP array is encoded as JSON dictionary, etc.
     *
     * @param $value
     */
    public function addPhpValue($value)
    {
        if ($value === null) {
            $this->addNull();
        } elseif (is_bool($value)) {
            $this->addBoolean($value);
        } elseif (is_int($value)) {
            $this->addInt($value);
        } elseif (is_string($value)) {
            $this->addString($value);
        } elseif (is_array($value)) {
            $this->startDictionary();
            foreach ($value as $k => $v) {
                $this->startDictionaryValue($k);
                $this->addPhpValue($v);
            }
            $this->endDictionary();
        }
    }
}


// ***** lib/task.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

abstract class Task {
    private $_data;

    public function __construct($data) {
        $this->_data = $data;
    }

    public function __get($name) {
        if (!isset($this->_data[$name])) {
            throw new Exception('Task tries to access undefined property "' . $name . '"');
        }
        return $this->_data[$name];
    }

    protected function getIfExist($name, $default=null) {
        if (!isset($this->_data[$name])) {
            return $default;
        } else {
            return $this->_data[$name];
        }
    }
}


// ***** lib/stream_packet_writer.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

// ====================================== Abstract stream packet writer ================================================

abstract class StreamPacketWriter
{
    /**
     * @param int $value
     * @return void
     */
    abstract function writeInt($value);

    /**
     * @param string $value
     * @return void
     */
    abstract function writeString($value);

    /**
     * @param string $packetId
     * @return void
     */
    abstract function writePacketId($packetId);
}



// ***** lib/stream_result_task.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

abstract class StreamResultTask extends Task {
    abstract public function run();
}


// ***** lib/agent.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class Agent {
    public static function autoload($class) {
        $pattern = '/(?<!^)([A-Z])/';
        $phpExt = '.' . WEB_RPC_AGENT_PHP_EXTENSION;
        if (
            'Task' != $class && 'JsonResultTask' != $class && 'StreamResultTask' != $class &&
            self::endsWith($class, 'Task')
        ) {
            $fileName = strtolower(preg_replace($pattern, '_$1', substr($class, 0, -4))) . $phpExt;
            $filePath = 'task' . DIRECTORY_SEPARATOR . $fileName;
        } else if (self::endsWith($class, 'Utils')) {
            $fileName = strtolower(preg_replace($pattern, '_$1', substr($class, 0, -5))) . $phpExt;
            $filePath = 'lib' . DIRECTORY_SEPARATOR . 'utils' . DIRECTORY_SEPARATOR . $fileName;
        } else {
            $fileName = strtolower(preg_replace($pattern, '_$1', $class)) . $phpExt;
            $filePath = 'lib' . DIRECTORY_SEPARATOR . $fileName;
        }
        $filePath = dirname(__FILE__) . '/../' . $filePath;

        if (file_exists($filePath)) {
            /** @noinspection PhpIncludeInspection */
            //require_once($filePath);
        }
    }

    public static function create_dispatcher() {
        return new Dispatcher();
    }

    private static function endsWith($haystack, $needle) {
        $length = strlen($needle);
        return $length === 0 || (substr($haystack, -$length) === $needle);
    }
}


// ***** lib/common_constants.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

define('SIZE_KB', 1024);
define('SIZE_MB', 1024 * 1024);



// ***** lib/directory_contents_writer.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class DirectoryContentsWriter
{
    /**
     * @var FileObjectsWriter $_fileObjectsWriter
     */
    private $_fileObjectsWriter;

    /**
     * @param FileObjectsWriter $fileObjectsWriter object capable of writing files and directories to stream
     */
    public function __construct($fileObjectsWriter)
    {
        $this->_fileObjectsWriter = $fileObjectsWriter;
    }

    /**
     * Write directory contents to HTTP response as stream.
     *
     * @param string $rootDirectory
     * @param string[]|null $startPathParts array of directory paths describing a file or a directory from which
     * streaming should be continued, e.g. array("var", "www", "vhosts", "example.com", "config.php") to start
     * streaming from "/var/www/vhosts/example.com/config.php" file
     * @param int|null $startPosition position to start transferring file specified in $startPathParts argument from
     * @param array $excludes list of files/directories, which must not be written to the stream
     * @param string|null $subdirectory directory inside of the root directory, used to walk file tree recursively
     */
    public function streamDirectoryContents(
        $rootDirectory, $startPathParts, $startPosition=null, $excludes=array(), $subdirectory=null
    ) {
        if ($subdirectory === null) {
            $fullDirectoryPath = $rootDirectory;
        } else {
            $fullDirectoryPath = $rootDirectory . DIRECTORY_SEPARATOR . $subdirectory;
        }

        $directoryItems = $this->getDirectoryItems($fullDirectoryPath);

        // Important detail here - we sort all found items to divide them into 2 groups:
        // items which were already transferred and items which should be transferred
        sort($directoryItems);

        if (is_array($startPathParts) && count($startPathParts) > 0) {
            $startPathItem = $startPathParts[0];
        } else {
            $startPathItem = null;
        }

        // if start item is not passed - start writing directory items from the beginning,
        // otherwise wait for the start item
        $start = ($startPathItem === null);

        foreach ($directoryItems as $directoryItem) {
            // if start item is found - write the start item and all directory items after the start item
            if (!$start && $directoryItem === $startPathItem) {
                $start = true;
            }

            if (!$start) {
                continue;
            }

            // Full path of the item on filesystem, to be used with filesystem functions like "fopen", "opendir", etc
            $fullItemPath = $fullDirectoryPath. DIRECTORY_SEPARATOR . $directoryItem;

            // Relative path of the item, related to the $rootDirectory. Relative path is written to the stream.
            if ($subdirectory === null) {
                $relativePath = $directoryItem;
            } else {
                $relativePath = $subdirectory . DIRECTORY_SEPARATOR . $directoryItem;
            }

            if (in_array($relativePath, $excludes)) {
                continue;
            }

            if (is_link($fullItemPath)) {
                $target = @readlink($fullItemPath);
                if ($target !== false) {
                    $this->_fileObjectsWriter->writeSymlink($relativePath, $target);
                }
            } else {
                if (is_dir($fullItemPath)) {
                    // Dump subdirectory recursively:
                    // 1) Write directory to the stream.
                    $this->_fileObjectsWriter->writeDirectory($relativePath);
                    // 2) Write directory items to the stream recursively.
                    $newStartFrom = array();
                    if (count($startPathParts) > 1 && $directoryItem === $startPathItem) {
                        $newStartFrom = array_slice($startPathParts, 1);
                    }
                    $this->streamDirectoryContents(
                        $rootDirectory, $newStartFrom, $startPosition, $excludes, $relativePath
                    );
                } else {
                    // Write file to the stream.
                    if ($startPosition !== null && $directoryItem === $startPathItem) {
                        $position = $startPosition;
                    } else {
                        $position = 0;
                    }
                    $this->_fileObjectsWriter->writeFile($rootDirectory, $relativePath, $position);
                }
            }
        }
    }

    /**
     * Get list of directory items in the specified directory
     *
     * @param string $directory
     * @return string[]
     */
    public function getDirectoryItems($directory)
    {
        $handle = @opendir($directory);

        if ($handle === false) {
            $this->_fileObjectsWriter->writeError(
                "Failed to read directory '$directory'. " .
                "Files and directories inside the directory were not transferred. " .
                "Check that you have sufficient permissions to read the directory " .
                "or transfer the directory manually."
            );
            return array();
        }

        $directoryItems = array();
        while (false !== ($item = @readdir($handle))) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            if (strpos($item, 'plesk-migrator-agent') === 0) {
                // skip migrator agent files when transferring - they are garbage for the target server
                // now simply match by name pattern, better implementation should pass list of excluded
                // directories as argument
                continue;
            }

            $directoryItems[] = $item;
        }

        @closedir($handle);

        return $directoryItems;
    }
}



// ***** lib/directory_stream_packet_writer.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

// ====================================== Directory stream packet types ===============================================

define('DIRECTORY_STREAM_PACKET_DIRECTORY', 1);
define('DIRECTORY_STREAM_PACKET_FILE_START', 2);
define('DIRECTORY_STREAM_PACKET_FILE_CONTINUE', 3);
define('DIRECTORY_STREAM_PACKET_FILE_CHUNK', 4);
define('DIRECTORY_STREAM_PACKET_FILE_END', 5);
define('DIRECTORY_STREAM_PACKET_SYMLINK', 6);
define('DIRECTORY_STREAM_PACKET_ERROR', 7);
define('DIRECTORY_STREAM_PACKET_STREAM_END', 8);

// ====================================== Directory stream packet writer ==============================================

class DirectoryStreamPacketWriter
{
    /**
     * @var StreamPacketWriter $_streamPacketWriter
     */
    private $_streamPacketWriter;

    /**
     * @param StreamPacketWriter $streamPacketWriter object capable of writing data to stream
     */
    public function __construct($streamPacketWriter)
    {
        $this->_streamPacketWriter = $streamPacketWriter;
    }

    /**
     * @param string $directoryPath
     * @return void
     */
    public function writePacketDirectory($directoryPath)
    {
        $this->_streamPacketWriter->writePacketId(DIRECTORY_STREAM_PACKET_DIRECTORY);
        $this->_streamPacketWriter->writeString($directoryPath);
    }

    /**
     * @param string $filePath
     * @return void
     */
    public function writePacketFileStart($filePath)
    {
        $this->_streamPacketWriter->writePacketId(DIRECTORY_STREAM_PACKET_FILE_START);
        $this->_streamPacketWriter->writeString($filePath);
    }

    /**
     * @param string $filePath
     * @param int $position
     * @return void
     */
    public function writePacketFileContinue($filePath, $position)
    {
        $this->_streamPacketWriter->writePacketId(DIRECTORY_STREAM_PACKET_FILE_CONTINUE);
        $this->_streamPacketWriter->writeInt($position);
        $this->_streamPacketWriter->writeString($filePath);
    }

    /**
     * @param string $chunk
     * @return void
     */
    public function writePacketFileChunk($chunk)
    {
        $this->_streamPacketWriter->writePacketId(DIRECTORY_STREAM_PACKET_FILE_CHUNK);
        $this->_streamPacketWriter->writeString($chunk);
    }

    /**
     * @return void
     */
    public function writePacketFileEnd()
    {
        $this->_streamPacketWriter->writePacketId(DIRECTORY_STREAM_PACKET_FILE_END);
    }

    /**
     * @param string $linkPath
     * @param string $target
     * @return mixed
     */
    public function writePacketSymlink($linkPath, $target)
    {
        $this->_streamPacketWriter->writePacketId(DIRECTORY_STREAM_PACKET_SYMLINK);
        $this->_streamPacketWriter->writeString($linkPath);
        $this->_streamPacketWriter->writeString($target);
    }


    /**
     * @param string $errorMessage
     * @return void
     */
    public function writePacketError($errorMessage)
    {
        $this->_streamPacketWriter->writePacketId(DIRECTORY_STREAM_PACKET_ERROR);
        $this->_streamPacketWriter->writeString($errorMessage);
    }

    /**
     * @return void
     */
    public function writePacketStreamEnd()
    {
        $this->_streamPacketWriter->writePacketId(DIRECTORY_STREAM_PACKET_STREAM_END);
    }

}



// ***** lib/dispatcher.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class Dispatcher {
    private $_logger;
    private $_result_encoding;

    // provide results in JSON format
    const RESULT_ENCODING_JSON_PLAIN = 'json_plain';
    // provide results in JSON format, where each string value is encoded with base64,
    // useful to encode binary (non-UTF-8 data)
    const RESULT_ENCODING_JSON_BASE64 = 'json_base64';

    public function __construct() {
        if (!WEB_RPC_AGENT_DEBUG) {
            ob_start();
        }

        $this->_logger = Registry::get_instance()->set_logger(new Logger());
        Registry::get_instance()->set_php_functions(new PhpFunctions());

        if (array_key_exists('result_encoding', $_GET)) {
            if ($_GET['result_encoding'] == self::RESULT_ENCODING_JSON_BASE64) {
                $this->_result_encoding = self::RESULT_ENCODING_JSON_BASE64;
            } else {
                // in case of any invalid value fallback to plain JSON
                $this->_result_encoding = self::RESULT_ENCODING_JSON_PLAIN;
            }
        } else {
            $this->_result_encoding = self::RESULT_ENCODING_JSON_PLAIN;
        }

        register_shutdown_function(array($this, 'handle_shutdown'));
        set_exception_handler(array($this, 'handle_exception'));
        set_error_handler(array($this, 'handle_error'));
    }

    public function run() {
        $taskName = $_GET['task'];

        $rawData = json_decode(file_get_contents("php://input"), true);
        if (!is_array($rawData)) {
            $rawData = array();
        }
        $postData = $_POST;
        if (!is_array($postData)) {
            $postData = array();
        }
        $data = array_merge($rawData, $postData);

        if (@$data['password'] !== WEB_RPC_AGENT_PASSWORD) {
            $this->_finalize(null, 'Authentication failed');
            exit();
        }

        $this->_logger->info('Perform task ' . $taskName);

        $taskNameParts = array();
        foreach (explode('_', $taskName) as $part) {
            $taskNameParts[] = ucfirst($part);
        }
        $taskClassName = implode('', $taskNameParts) . 'Task';
        $taskInstance = new $taskClassName($data);

        if ($taskInstance instanceof JsonResultTask) {
            try {
                $encoder = $this->_createEncoder();
                $taskInstance->run($encoder);
                $this->_finalize($encoder->getData(), null);
            } catch (TaskException $e) {
                $this->_finalize(null, $e->getMessage());
            }
        } elseif ($taskInstance instanceof StreamResultTask) {
            ob_end_clean(); // no buffering is needed for stream task - data should be written immediately
            $taskInstance->run();
        } else {
            throw new Exception('Unknown task "' . $taskName . '"');
        }
    }

    public function handle_shutdown() {
        $error = error_get_last();
        if (is_null($error)) {
            return;
        }
        switch ($error['type']) {
            case E_ERROR:
            case E_PARSE:
            case E_COMPILE_ERROR:
            case E_CORE_ERROR:
                $error_message = 'PHP Fatal Error at line ' . $error['line'] . ' of file ' . $error['file'] . ': ' .
                    $error['message'];
                $this->_logger->error($error_message);
                $this->_finalize(null, $error_message);
        }
    }

    public function handle_exception(Exception $exception) {
        $error_message = 'Unhandled exception at line ' . $exception->getLine() . ' of file ' .
            $exception->getFile() . ': ' . $exception->getMessage();
        $this->_logger->error($error_message );
        $this->_logger->debug('Exception stacktrace:' . Logger::CRLF . $exception->getTraceAsString());
        $this->_finalize(null, $error_message);
    }

    public function handle_error($errno, $errstr, $errfile, $errline) {
        switch ($errno) {
            case E_WARNING:
                $this->_logger->warning(
                    'PHP Warning at line ' . $errline . ' of file ' . $errfile . ': ' . $errstr
                );
                break;
            case E_NOTICE:
                $this->_logger->debug(
                    'PHP Notice at line ' . $errline . ' of file ' . $errfile . ': ' . $errstr
                );
                break;
            default:
                $this->_logger->debug(
                    'Unknown PHP error ' . $errno . ' at line ' . $errline . ' of file ' . $errfile . ': ' . $errstr
                );
        }
        return true;
    }

    function _finalize($result, $error) {
        if (!WEB_RPC_AGENT_DEBUG) {
            ob_end_clean();
        }

        if (!is_null($error)) {
            http_response_code(500);
        }

        $encoder = $this->_createEncoder();

        $encoder->startDictionary();
        $encoder->startDictionaryValue('result');
        if (strlen($result) > 0) {
            $encoder->addRawValue($result);
        } else {
            $encoder->addNull();
        }
        $encoder->startDictionaryValue('error');
        $encoder->addPhpValue($error);
        $encoder->endDictionary();

        echo $encoder->getData();

        exit();
    }

    /**
     * @return ResultEncoder
     */
    private function _createEncoder()
    {
        if ($this->_result_encoding == self::RESULT_ENCODING_JSON_BASE64) {
            return new ResultEncoderJsonBase64();
        } else {
            return new ResultEncoderJsonPlain();
        }
    }
}



// ***** lib/file_objects_writer.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * Object capable of writing files and directories to the stream.
 */
class FileObjectsWriter
{
    /**
     * @var DirectoryStreamPacketWriter $_directoryStreamPacketWriter
     * @var int $_fileChunkSize
     */
    private $_directoryStreamPacketWriter;
    private $_fileChunkSize;

    /**
     * @param DirectoryStreamPacketWriter $directoryStreamPacketWriter
     * @param int $fileChunkSize
     */
    public function __construct($directoryStreamPacketWriter, $fileChunkSize = SIZE_MB)
    {
        $this->_directoryStreamPacketWriter = $directoryStreamPacketWriter;
        $this->_fileChunkSize = $fileChunkSize;
    }

    /**
     * @param string $baseDirectory
     * @param string $relativeFilePath
     * @param int $startPosition
     * @return void
     */
    public function writeFile($baseDirectory, $relativeFilePath, $startPosition = 0)
    {
        $fullFilePath = $baseDirectory . DIRECTORY_SEPARATOR . $relativeFilePath;

        $fp = @fopen($fullFilePath, 'r');

        if ($fp !== false) {
            if ($startPosition == 0) {
                $this->_directoryStreamPacketWriter->writePacketFileStart($relativeFilePath);
            } else {
                $seekResult = @fseek($fp, $startPosition);
                if ($seekResult != -1) {
                    $this->_directoryStreamPacketWriter->writePacketFileContinue($relativeFilePath, $startPosition);
                } else {
                    $this->_directoryStreamPacketWriter->writePacketFileStart($relativeFilePath);
                }
            }

            $readBytes = 0;
            while (!@feof($fp)) {
                $chunk = @fread($fp, $this->_fileChunkSize);
                if ($chunk !== false) {
                    $this->_directoryStreamPacketWriter->writePacketFileChunk($chunk);
                    $readBytes += strlen($chunk);
                } else {
                    if ($readBytes > 0) {
                        $this->writeError(
                            "Failed to read file contents of '$fullFilePath'. " .
                            "Only the first $readBytes bytes were transferred."
                        );
                    } else {
                        $this->writeError(
                            "Failed to read file contents '$fullFilePath'. The file was not transferred."
                        );
                    }
                    break;
                }
            }
        } else {
            $this->writeError(
                "Failed to read file '$fullFilePath'. The file was not transferred. " .
                "Check that you have sufficient permissions to read the file " .
                "or transfer the file manually."
            );
        }
        $this->_directoryStreamPacketWriter->writePacketFileEnd();
    }

    /**
     * @param string $relativeDirPath
     * @return void
     */
    public function writeDirectory($relativeDirPath)
    {
        $this->_directoryStreamPacketWriter->writePacketDirectory($relativeDirPath);
    }

    public function writeSymlink($relativeLinkPath, $target)
    {
        $this->_directoryStreamPacketWriter->writePacketSymlink($relativeLinkPath, $target);
    }

    /**
     * @param string $errorMessage
     * @return void
     */
    public function writeError($errorMessage)
    {
        $this->_directoryStreamPacketWriter->writePacketError($errorMessage);
    }
}



// ***** lib/json_result_task.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

abstract class JsonResultTask extends Task{
    abstract public function run(ResultEncoder $resultEncoder);
}


// ***** lib/logger.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class Logger {
    const CRLF = "\r\n";

    const TYPE_ERROR = 1;
    const TYPE_WARNING = 2;
    const TYPE_INFO = 3;
    const TYPE_DEBUG = 4;

    private $_handle = null;

    public function __construct() {
        try {
            $this->_handle = fopen('log', 'a');
        } catch (Exception $e) {
            // logging should not block task execution, so skip any exceptions
        }
    }

    public function log($message, $type) {
        $type_label = 'DEBUG';
        switch ($type) {
            case self::TYPE_ERROR:
                $type_label = 'ERROR';
                break;
            case self::TYPE_WARNING:
                $type_label = 'WARNING';
                break;
            case self::TYPE_INFO:
                $type_label = 'INFO';
                break;
        }
        if (is_null($this->_handle)) {
            return;
        }
        $date = date('Y-m-d H:i:s');
        try {
            fwrite($this->_handle, '[' . $date . '][' . $type_label . '] ' . $message . self::CRLF);
        } catch (Exception $e) {
            // logging should not block task execution, so skip any exceptions
        }
    }

    public function error($message) {
        $this->log($message, self::TYPE_ERROR);
    }

    public function warning($message) {
        $this->log($message, self::TYPE_WARNING);
    }

    public function info($message) {
        $this->log($message, self::TYPE_INFO);
    }

    public function debug($message) {
        $this->log($message, self::TYPE_DEBUG);
    }
}


// ***** lib/php_functions.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * Wrapper around PHP functions and constants to have ability to mock them in unit tests.
 */
class PhpFunctions
{
    public function file_get_contents($filename)
    {
        return file_get_contents($filename);
    }

    public function file_exists($filename)
    {
        return file_exists($filename);
    }

    public function mkdir($pathname)
    {
        return mkdir($pathname);
    }

    public function unlink($filename)
    {
        return unlink($filename);
    }

    public function file_put_contents($filename, $data)
    {
        return file_put_contents($filename, $data);
    }

    public function proc_open($cmd, $descriptorspec, &$pipes, $cwd = null, $env = null)
    {
        return proc_open($cmd, $descriptorspec, $pipes, $cwd, $env);
    }

    public function proc_close($process)
    {
        return proc_close($process);
    }

    public function is_resource($var)
    {
        return is_resource($var);
    }

    public function fclose($handle)
    {
        return fclose($handle);
    }

    public function stream_get_contents($handle, $maxlength = -1, $offset = -1)
    {
        return stream_get_contents($handle, $maxlength, $offset);
    }

    public function stream_select(&$read, &$write, &$except, $tv_sec, $tv_usec = 0)
    {
        return stream_select($read, $write, $except, $tv_sec, $tv_usec);
    }

    public function stream_set_blocking($stream, $mode)
    {
        return stream_set_blocking($stream, $mode);
    }

    public function ini_get ($varname)
    {
        return ini_get($varname);
    }

    public function is_dir($filename)
    {
        return is_dir($filename);
    }

    public function is_link($filename)
    {
        return is_link($filename);
    }

    public function is_file($filename)
    {
        return is_file($filename);
    }

    public function opendir($path)
    {
        return opendir($path);
    }

    public function closedir($dir_handle)
    {
        closedir($dir_handle);
    }

    public function readdir($dir_handle)
    {
        return readdir($dir_handle);
    }

    public function getPhpOsConstant()
    {
        return PHP_OS;
    }

    public function fread($handle, $length)
    {
        return fread($handle, $length);
    }

}


// ***** lib/plain_stream_packet_writer.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * Write data of stream packets to HTTP response in plain form, without any encryption and compression.
 *
 * No buffering is performed - the packets are written immediately.
 */
class PlainStreamPacketWriter extends StreamPacketWriter
{
    /**
     * @param int $value
     * @return void
     */
    public function writeInt($value)
    {
        print $value . "\n";
    }

    /**
     * @param string $value
     * @return void
     */
    public function writeString($value)
    {
        $this->writeInt(strlen($value));
        print $value . "\n";
    }

    /**
     * @param string $packetId
     * @return void
     */
    public function writePacketId($packetId)
    {
        $this->writeInt($packetId);
    }
}



// ***** lib/process_stream_packet_writer.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

// ====================================== Process stream packet types =================================================

define('PROCESS_STREAM_PACKET_STDOUT_CHUNK', 1);
define('PROCESS_STREAM_PACKET_STDERR_CHUNK', 2);
define('PROCESS_STREAM_PACKET_ERROR', 3);
define('PROCESS_STREAM_PACKET_PROC_END', 4);

// ====================================== Process stream packet writer ================================================

class ProcessStreamPacketWriter
{
    /**
     * @var StreamPacketWriter $_streamPacketWriter
     */
    private $_streamPacketWriter;
    /**
     * @param StreamPacketWriter $streamPacketWriter object capable of writing data to stream
     */
    public function __construct($streamPacketWriter)
    {
        $this->_streamPacketWriter = $streamPacketWriter;
    }

    /**
     * @param string $chunk
     * @return void
     */
    public function writePacketStdoutChunk($chunk)
    {
        $this->_streamPacketWriter->writePacketId(PROCESS_STREAM_PACKET_STDOUT_CHUNK);
        $this->_streamPacketWriter->writeString($chunk);
    }

    /**
     * @param string $chunk
     * @return void
     */
    public function writePacketStderrChunk($chunk)
    {
        $this->_streamPacketWriter->writePacketId(PROCESS_STREAM_PACKET_STDERR_CHUNK);
        $this->_streamPacketWriter->writeString($chunk);
    }

    /**
     * @param string $errorMessage
     * @return void
     */
    public function writePacketError($errorMessage)
    {
        $this->_streamPacketWriter->writePacketId(PROCESS_STREAM_PACKET_ERROR);
        $this->_streamPacketWriter->writeString($errorMessage);
    }

    /**
     * @param int $exitCode
     * @return void
     */
    public function writePacketProcEnd($exitCode)
    {
        $this->_streamPacketWriter->writePacketId(PROCESS_STREAM_PACKET_PROC_END);
        $this->_streamPacketWriter->writeInt($exitCode);
    }
}



// ***** lib/registry.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class Registry {
    private static $_instance = null;

    /**
     * @var Logger
     */
    private $_logger = null;

    /**
     * @var PhpFunctions
     */
    private $_php_functions = null;

    /**
     * @return Registry
     */
    public static function get_instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new Registry();
        }
        return self::$_instance;
    }

    /**
     * @param $logger Logger
     * @return Logger
     */
    public function set_logger($logger) {
        return $this->_logger = $logger;
    }

    /**
     * @return Logger
     */
    public function get_logger() {
        return $this->_logger;
    }

    /**
     * @param $php_functions PhpFunctions
     * @return PhpFunctions
     */
    public function set_php_functions($php_functions) {
        return $this->_php_functions = $php_functions;
    }

    /**
     * @return PhpFunctions
     */
    public function get_php_functions() {
        return $this->_php_functions;
    }
}


// ***** lib/task_exception.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class TaskException extends Exception {
}


// ***** lib/utils/common.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.


class CommonUtils
{
    /**
     * Check if function is disabled in PHP configuration.
     *
     * @param string $functionName
     * @return bool
     */
    public static function isFunctionDisabled($functionName)
    {
        try {
            $phpFunctions = Registry::get_instance()->get_php_functions();
            $disabled_functions_option = $phpFunctions->ini_get('disable_functions');
            if (!$disabled_functions_option) {
                return false;
            }
            $disabled_functions = explode(',', $disabled_functions_option);
            foreach ($disabled_functions as $disabled_function) {
                if (trim($disabled_function) === $functionName) {
                    return true;
                }
            }
        } catch (Exception $e) {
            // ignore any errors
        }
        return false;
    }

    /**
     * Merge passed environment with server environment
     *
     * @param array $passedEnv
     * @return array
     */
    public static function getFullEnv($passedEnv = NULL)
    {
        if (!is_array($passedEnv)) {
            $passedEnv = array();
        }
        /*
         * Variable $_ENV can be empty, see http://us.php.net/manual/en/ini.core.php#ini.variables-order
         * Variable $_SERVER contains unnecessary data but can be used if $_ENV is empty.
         * https://stackoverflow.com/questions/20288822/environment-is-not-passed-to-process-opened-by-proc-open
         */
        if (empty($_ENV)) {
            return array_merge($_SERVER, $passedEnv);
        }
        return array_merge($_ENV, $passedEnv);
    }
}


// ***** lib/utils/file.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class FileUtils {
    public static function open_dir($base_path) {
        $phpFunctions = Registry::get_instance()->get_php_functions();

        if (!$phpFunctions->is_dir($base_path)) {
            return null;
        }
        $handle = $phpFunctions->opendir($base_path);
        if ($handle === false) {
            return null;
        }
        return $handle;
    }
}


// ***** lib/utils/os.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class OsUtils {
    public static function isWindows() {
        $phpFunctions = Registry::get_instance()->get_php_functions();
        return strtoupper(substr($phpFunctions->getPhpOsConstant(), 0, 3)) === 'WIN';
    }
}


// ***** task/download_dir.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class DownloadDirTask extends StreamResultTask {
    public function run() {
        $directory = $this->directory;
        $startPathParts = $this->_parseStartPathTaskParameter();
        $startPosition = $this->_parseStartPositionTaskParameter();
        $excludes = $this->_parseExcludes();

        $streamWriter = new PlainStreamPacketWriter();
        $directoryStreamPacketWriter = new DirectoryStreamPacketWriter($streamWriter);
        $fileObjectsWriter = new FileObjectsWriter($directoryStreamPacketWriter);
        $directoryContentsWriter = new DirectoryContentsWriter($fileObjectsWriter);
        $directoryContentsWriter->streamDirectoryContents(
            $directory, $startPathParts, $startPosition, $excludes
        );
        $directoryStreamPacketWriter->writePacketStreamEnd();
    }

    /**
     * @return string[]
     */
    private function _parseStartPathTaskParameter() {
        $startPathStr = $this->getIfExist('start_path');
        if (!is_null($startPathStr) && $startPathStr !== '') {
            return explode('/', $startPathStr);
        } else {
            return array();
        }
    }

    /**
     * @return int
     */
    private function _parseStartPositionTaskParameter()
    {
        $startPositionStr = $this->getIfExist('start_position');
        if (!is_null($startPositionStr) && $startPositionStr !== '') {
            return (int)$startPositionStr;
        } else {
            return 0;
        }
    }

    /**
     * Parse list of excludes parameter.
     *
     * Returns list of excludes, where each item is a path relative to "directory" parameter.
     *
     * For example, if "directory" is "/var/www/vhosts/example.com", list of excludes returned by the function
     * could look like:
     * array(
     *     "httpdocs/application/cache",
     *     "httpdocs/application/logs",
     *     "logs/error.log",
     *     "logs/access.log"
     * )
     *
     * That list of excludes will make the following files/directories skipped during transfer:
     * - "/var/www/vhosts/example.com/httpdocs/application/cache"
     * - "/var/www/vhosts/example.com/httpdocs/application/logs"
     * - "/var/www/vhosts/example.com/logs/error.log"
     * - "/var/www/vhosts/example.com/logs/access.log"
     *
     * @return string[]
     */
    private function _parseExcludes()
    {
        $excludes = $this->getIfExist('excludes');
        if (is_array($excludes)) {
            $excludesNormalized = array();
            foreach ($excludes as $exclude) {
                $exclude = trim($exclude, "/");
                $exclude = str_replace("/", DIRECTORY_SEPARATOR, $exclude);
                $excludesNormalized[] = $exclude;
            }
            return $excludesNormalized;
        } else {
            return array();
        }
    }
}



// ***** task/echo.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class EchoTask extends JsonResultTask {
    /**
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $resultEncoder->addPhpValue(
            array('message' => $this->getIfExist('message', ''))
        );
    }
}


// ***** task/get_base_path.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class GetBasePathTask extends JsonResultTask {
    public function run(ResultEncoder $resultEncoder) {
        $resultEncoder->addString(
            dirname($_SERVER["SCRIPT_FILENAME"])
        );
    }
}


// ***** task/get_dir_tree.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $base_path
 */
class GetDirTreeTask extends JsonResultTask {
    /**
     * Retrieve list of file names in given directory
     *
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $resultEncoder->startList();
        self::_get_dir_tree_items($resultEncoder, $this->base_path);
        $resultEncoder->endList();
    }

    private static function _get_dir_tree_items(ResultEncoder $resultEncoder, $base_path) {
        $phpFunctions = Registry::get_instance()->get_php_functions();

        $handle = FileUtils::open_dir($base_path);

        if (is_null($handle)) {
            // Failed to open the directory - try to open directories near the agent directory.
            // For example, if requested base path was
            //   C:\inetpub\vhosts\example.com
            // and web RPC agent was deployed to
            //   C:\inetpub\vhosts\example.com\a\b\c
            // we will try here to list directories:
            //   C:\inetpub\vhosts\example.com\a
            //   C:\inetpub\vhosts\example.com\a\b
            //   C:\inetpub\vhosts\example.com\a\b\c
            $script_dir = dirname($_SERVER["SCRIPT_FILENAME"]);
            if (stripos($script_dir, $base_path) === 0) {
                $path_elements = explode(
                    DIRECTORY_SEPARATOR, trim(substr($script_dir, strlen($base_path)), DIRECTORY_SEPARATOR)
                );
                $full_subpath = rtrim($base_path, DIRECTORY_SEPARATOR);

                $cnt = 0;
                foreach ($path_elements as $path_element) {
                    $resultEncoder->startDictionary();
                    $cnt++;
                    $resultEncoder->startDictionaryValue($path_element);
                    $resultEncoder->startList();

                    $full_subpath .=  DIRECTORY_SEPARATOR . $path_element;
                    $handle = FileUtils::open_dir($full_subpath);
                    if ($handle) {
                        $phpFunctions->closedir($handle);
                        self::_get_dir_tree_items($resultEncoder, $full_subpath);
                        break;
                    }
                }

                for ($i = 0; $i < $cnt; $i++) {
                    $resultEncoder->endList();
                    $resultEncoder->endDictionary();
                }
            }

            return;
        }

        while (false !== ($item = $phpFunctions->readdir($handle))) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            $item_path = $base_path . DIRECTORY_SEPARATOR . $item;
            if ($phpFunctions->is_link($item_path)) {
                continue;
            }

            if ($phpFunctions->is_file($item_path)) {
                $resultEncoder->startListValue();
                $resultEncoder->addString($item);
                continue;
            } else {
                $resultEncoder->startListValue();
                $resultEncoder->startDictionary();
                $resultEncoder->startDictionaryValue($item);
                $resultEncoder->startList();
                self::_get_dir_tree_items($resultEncoder, $item_path);
                $resultEncoder->endList();
                $resultEncoder->endDictionary();
            }
        }
    }
}


// ***** task/get_file_contents.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $file_path
 */
class GetFileContentsTask extends JsonResultTask {
    /**
     * Retrieve content of file with given path
     *
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $phpFunctions = Registry::get_instance()->get_php_functions();
        $resultEncoder->addString(
            $phpFunctions->file_get_contents($this->file_path)
        );
    }
}


// ***** task/get_file_names.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $path
 */
class GetFileNamesTask extends JsonResultTask {
    /**
     * Retrieve list of file names in given directory
     *
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $phpFunctions = Registry::get_instance()->get_php_functions();

        $resultEncoder->startList();

        $handle = FileUtils::open_dir($this->path);

        if (!is_null($handle)) {
            while (false !== ($item = $phpFunctions->readdir($handle))) {
                if ($item == '.' || $item == '..') {
                    continue;
                }
                $item_path = $this->path . DIRECTORY_SEPARATOR . $item;
                if ($phpFunctions->is_file($item_path)) {
                    $resultEncoder->startListValue();
                    $resultEncoder->addString($item);
                    continue;
                }
            }
        }

        $resultEncoder->endList();
    }
}


// ***** task/get_file_paths.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $base_path
 * @property $is_recursive
 */
class GetFilePathsTask extends JsonResultTask {
    /**
     * Retrieve list of file names in given directory
     *
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $resultEncoder->startList();
        $this->_addItems($resultEncoder, $this->base_path);
        $resultEncoder->endList();
    }

    private function _addItems(ResultEncoder $resultEncoder, $path)
    {
        $handle = FileUtils::open_dir($path);

        if (is_null($handle)) {
            return;
        }

        $phpFunctions = Registry::get_instance()->get_php_functions();

        while (false !== ($item = $phpFunctions->readdir($handle))) {
            if ($item == '.' || $item == '..') {
                continue;
            }

            $item_path = $path . DIRECTORY_SEPARATOR . $item;
            if ($phpFunctions->is_file($item_path)) {
                $resultEncoder->startListValue();
                $resultEncoder->addString($item_path);
            } elseif ($this->is_recursive) {
                $this->_addItems($resultEncoder, $item_path);
            }
        }
    }
}


// ***** task/get_php_version.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class GetPhpVersionTask extends JsonResultTask {
    /**
     * Retrieve version of PHP
     *
     * @return string
     */
    public function run(ResultEncoder $resultEncoder) {
        $resultEncoder->addString(phpversion());
    }
}


// ***** task/is_file_exists.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $file_path
 */
class IsFileExistsTask extends JsonResultTask {
    /**
     * Check if file with given path exists on file system
     *
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $phpFunctions = Registry::get_instance()->get_php_functions();
        $resultEncoder->addBoolean(
            $phpFunctions->file_exists($this->file_path)
        );
    }
}


// ***** task/is_windows.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

class IsWindowsTask extends JsonResultTask {
    /**
     * Check if agent executed on Windows web server
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $resultEncoder->addBoolean(OsUtils::isWindows());
    }
}


// ***** task/mkdir.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $dir_path
 */
class MkdirTask extends JsonResultTask {
    /**
     * Create directory with given path
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $phpFunctions = Registry::get_instance()->get_php_functions();
        if ($phpFunctions->file_exists($this->dir_path)) {
            $resultEncoder->addNull();
            return;
    	}
        $phpFunctions->mkdir($this->dir_path);
        $resultEncoder->addNull();
    }
}


// ***** task/proc_open.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $cmd
 */
class ProcOpenTask extends JsonResultTask {
    /**
     * Execute given command
     *
     * @param ResultEncoder $resultEncoder
     * @throws TaskException
     */
    public function run(ResultEncoder $resultEncoder) {
        if (CommonUtils::isFunctionDisabled("proc_open")) {
            throw new TaskException("Failed to execute command: 'proc_open' function is disabled in PHP configuration");
        }
        $phpFunctions = Registry::get_instance()->get_php_functions();

        $cmd = $this->cmd;
        $descriptorspec = array(
            0 => array("pipe", "r"), // stdin
            1 => array("pipe", "w"), // stdout
            2 => array("pipe", "w")  // stderr
        );
        $cwd = $this->getIfExist("cwd", getcwd());
        $env = CommonUtils::getFullEnv($this->getIfExist("env", array()));

        $process = $phpFunctions->proc_open($cmd, $descriptorspec, $pipes, $cwd, $env);
        if (!($phpFunctions->is_resource($process))) {
            throw new TaskException("Failed to execute command: 'proc_open'");
        }

        $phpFunctions->fclose($pipes[0]);
        $phpFunctions->fclose($pipes[2]);
        $stdout = $phpFunctions->stream_get_contents($pipes[1]);
        $phpFunctions->fclose($pipes[1]);

        $exit_code = $phpFunctions->proc_close($process);
        $stderr = "";
        $resultEncoder->addPhpValue(
            array(
                'exit_code' => $exit_code,
                'stdout' => $stdout,
                'stderr' => $stderr
            )
        );
    }
}



// ***** task/proc_open_pipe.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $cmd
 */
class ProcOpenPipeTask extends StreamResultTask {
    /**
     * Execute given command and stream results
     *
     * There are different realization for Windows and Linux caused by different behaviour of
     * PHP functions in mentioned OSes. Currently, there are no proper way available to handle both stdout and stderr
     * pipes in Windows, avoid possible lock and keep compatibility with different PHP versions and environment.
     * So, stderr is dropped in Windows, only stdout and exit code are put into the stream.
     */
    public function run() {
        $streamWriter = new PlainStreamPacketWriter();
        $processStreamPacketWriter = new ProcessStreamPacketWriter($streamWriter);
        if (CommonUtils::isFunctionDisabled("proc_open")) {
            $processStreamPacketWriter->writePacketError(
                "Failed to execute command: 'proc_open' function is disabled in PHP configuration"
            );
            return;
        }
        $phpFunctions = Registry::get_instance()->get_php_functions();

        $cmd = $this->cmd;
        $descriptorspec = array(
            0 => array("pipe", "r"), // stdin
            1 => array("pipe", "w"), // stdout
            2 => array("pipe", "w")  // stderr
        );
        $cwd = $this->getIfExist("cwd", getcwd());
        $env = CommonUtils::getFullEnv($this->getIfExist("env", array()));

        // Drop stderr in Windows (read details in class description)
        $isWindows = OsUtils::isWindows();
        if ($isWindows) {
            $cmd = $cmd . " 2>nul";
        }

        $process = $phpFunctions->proc_open($cmd, $descriptorspec, $pipes, $cwd, $env);
        if (!($phpFunctions->is_resource($process))) {
            $processStreamPacketWriter->writePacketError("Failed to execute command: 'proc_open'");
            return;
        }

        $stdinPipe = $pipes[0];
        $stdoutPipe = $pipes[1];
        $stderrPipe = $pipes[2];

        // Drop stdin
        $phpFunctions->fclose($stdinPipe);

        $bufSize = 1024;

        if ($isWindows) {
            $this->streamOutputOnWindows($stdoutPipe, $stderrPipe, $processStreamPacketWriter, $bufSize);
        } else {
            if (false === $this->streamOutputOnLinux($stdoutPipe, $stderrPipe, $processStreamPacketWriter, $bufSize)) {
                return;
            }
        }

        $exitCode = $phpFunctions->proc_close($process);
        $processStreamPacketWriter->writePacketProcEnd($exitCode);
    }

    /**
     * Streams stdout and stderr on Linux with $processStreamPacketWriter.
     * Polls pipes in non-blocking mode with stream_select.
     * Returns true on success, false on any error.
     *
     * @param $stdoutPipe
     * @param $stderrPipe
     * @param ProcessStreamPacketWriter $processStreamPacketWriter
     * @param int $bufSize
     * @return boolean
     */
    public function streamOutputOnLinux($stdoutPipe, $stderrPipe, $processStreamPacketWriter, $bufSize = 1024)
    {
        $phpFunctions = Registry::get_instance()->get_php_functions();

        // It's good practice to use non-blocking mode to avoid possible locks
        $phpFunctions->stream_set_blocking($stdoutPipe, 0);
        $phpFunctions->stream_set_blocking($stderrPipe, 0);

        $stdoutPipeKey = 0;
        $stderrPipeKey = 1;
        $readPipes = array($stdoutPipeKey => $stdoutPipe, $stderrPipeKey => $stderrPipe);
        $write = NULL;
        $except = NULL;
        $timeoutSec = NULL; // returning only when an event on one of the watched streams occurs
        $timeoutMicrosec = NULL;
        do {
            $read = $readPipes;
            $numChangedStreams = $phpFunctions->stream_select(
                $read, $write, $except, $timeoutSec, $timeoutMicrosec
            );
            if (false === $numChangedStreams) {
                $processStreamPacketWriter->writePacketError(
                    "Failed to handle stdin/stdout of child process"
                );
                return false;
            }
            if ($numChangedStreams < 1) {
                $processStreamPacketWriter->writePacketError("Unexpected stream_select result");
                return false;
            }
            foreach ($read as $r) {
                $key = array_search($r, $readPipes);
                if (false === $key) {
                    continue;
                }
                $data = $phpFunctions->fread($readPipes[$key], $bufSize);
                $len = strlen($data);
                if ($len === 0) {
                    $phpFunctions->fclose($readPipes[$key]);
                    unset($readPipes[$key]);
                } else {
                    if ($key === $stdoutPipeKey) {
                        $processStreamPacketWriter->writePacketStdoutChunk($data);
                    } elseif ($key === $stderrPipeKey) {
                        $processStreamPacketWriter->writePacketStderrChunk($data);
                    }
                }
            }
        } while (count($readPipes) > 0);
        return true;
    }

    /**
     * Streams stdout on Windows with $processStreamPacketWriter.
     *
     * @param $stdoutPipe
     * @param $stderrPipe
     * @param ProcessStreamPacketWriter $processStreamPacketWriter
     * @param int $bufSize
     */
    public function streamOutputOnWindows($stdoutPipe, $stderrPipe, $processStreamPacketWriter, $bufSize = 1024) {
        $phpFunctions = Registry::get_instance()->get_php_functions();

        $phpFunctions->fclose($stderrPipe);
        while (true) {
            $data = $phpFunctions->fread($stdoutPipe, $bufSize);
            $len = strlen($data);
            if ($len === 0) {
                break;
            }
            $processStreamPacketWriter->writePacketStdoutChunk($data);
        }
        $phpFunctions->fclose($stdoutPipe);
    }
}



// ***** task/remove_file.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $file_path
 */
class RemoveFileTask extends JsonResultTask {
    /**
     * Remove file by given path on file system
     *
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $phpFunctions = Registry::get_instance()->get_php_functions();
        if ($phpFunctions->file_exists($this->file_path)) {
            $phpFunctions->unlink($this->file_path);
        }
        $resultEncoder->addNull();
    }
}


// ***** task/upload_file_contents.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

/**
 * @property $file_path
 * @property $content
 */
class UploadFileContentsTask extends JsonResultTask {
    /**
     * Write given content into file with given path
     * @param ResultEncoder $resultEncoder
     */
    public function run(ResultEncoder $resultEncoder) {
        $phpFunctions = Registry::get_instance()->get_php_functions();
        $phpFunctions->file_put_contents($this->file_path, $this->content);
        $resultEncoder->addNull();
    }
}


// ***** index.phpe *****
//<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.

define('WEB_RPC_AGENT_DEBUG', array_key_exists('debug', $_GET) && $_GET['debug'] == 'true');
define('WEB_RPC_AGENT_PASSWORD', 'gHPm1KMfsszPNWYY');

// we have different extensions when running from sources (*.phpe) and running already deployed agent (*.php)
// due to build system limitations; to run unit tests it is required to define WEB_RPC_AGENT_PHP_EXTENSION to "phpe".
if (!defined('WEB_RPC_AGENT_PHP_EXTENSION')) {
    define('WEB_RPC_AGENT_PHP_EXTENSION', 'php');
}

error_reporting(E_ALL);
ini_set('display_errors', WEB_RPC_AGENT_DEBUG ? 1 : 0);

date_default_timezone_set('UTC');

//require_once(dirname(__FILE__) . '/lib/agent.' . WEB_RPC_AGENT_PHP_EXTENSION);
//require_once(dirname(__FILE__) . '/lib/common_constants.' . WEB_RPC_AGENT_PHP_EXTENSION);
spl_autoload_register(array('Agent', 'autoload'));

Agent::create_dispatcher()->run();