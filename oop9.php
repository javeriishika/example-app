<?php

// Logger interface with log methods
interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

// FileLogger class that implements the Logger interface
class FileLogger implements Logger {
    private $logFile;

    public function __construct($logFile) {
        $this->logFile = $logFile;
    }

    public function logInfo($message) {
        $this->log("INFO", $message);
    }

    public function logWarning($message) {
        $this->log("WARNING", $message);
    }

    public function logError($message) {
        $this->log("ERROR", $message);
    }

    private function log($level, $message) {
        $logEntry = date('Y-m-d H:i:s') . " [$level] - $message" . PHP_EOL;
        file_put_contents($this->logFile, $logEntry, FILE_APPEND);
    }
}

// Usage of the FileLogger
$logger = new FileLogger("log.txt");

$logger->logInfo("This is an information message.");
$logger->logWarning("This is a warning message.");
$logger->logError("This is an error message.");

echo "Log messages have been written to log.txt.\n";

