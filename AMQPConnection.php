<?php
/**
 * Represents a connection to an AMQP broker.
 */
class AMQPConnection {
    /**
     * Establish a connection with the AMQP broker.
     * @return bool
     */
    public function connect() {}

    /**
     * Create an instance of AMQPConnection
     * @param array $credentials an optional array of credential information for connecting to the AMQP broker.
     * array(
     *     'host' => 'Max 1024 characters',
     *     'port' => int,
     *     'vhost' => 'Max 128 characters',
     *     'login' => 'Max 128 characters',
     *     'password' => 'Max 128 characters'
     * );
     * @return AMQPConnection
     * @throws AMQPException exception on parameter parsing failures, and option errors.
     */
    public function __construct($credentials = array()) {}

    /**
     * Closes the connection with the AMQP broker.
     * @return bool
     */
    public function disconnect() {}

    /**
     * Get the configured host
     * @return string
     */
    public function getHost() {}

    /**
     * Get the configured login
     * @return string
     */
    public function getLogin() {}

    /**
     * Get the configured password
     * @return string
     */
    public function getPassword() {}

    /**
     * Get the configured port
     * @return int
     */
    public function getPort() {}

    /**
     * Get the configured vhost
     * @return string
     */
    public function getVhost() {}

    /**
     * Determine if the AMQPConnection object is connected to the broker.
     * This method will check whether the connection to the AMQP broker is still valid. It does so by checking the return status of the last command.
     * @return bool
     */
    public function isConnected() {}

    /**
     * Closes any open connection and creates a new connection with the AMQP broker.
     * @return bool
     */
    public function reconnect() {}

    /**
     * Set the host
     * This method will set the hostname used to connect to the AMQP broker.
     * @param string $host
     * @return bool
     * @throws AMQPConnectionException if host is longer then 1024characters.
     */
    public function setHost($host) {}

    /**
     * Set the login
     * This method will set the login string used to connect to the AMQP broker.
     * @param string $login
     * @return bool
     * @throws AMQPConnectionException if login is longer then 32characters.
     */
    public function setLogin($login) {}

    /**
     * Set the password
     * This method will set the password string used to connect to the AMQP broker.
     * @param string $password
     * @return bool
     * @throws AMQPConnectionException if password is longer then 32characters.
     */
    public function setPassword($password) {}

    /**
     * Set the port
     * This method will set the port used to connect to the AMQP broker.
     * @param int $port
     * @return bool
     * @throws AMQPConnectionException if port is longer not between 1 and 65535.
     */
    public function setPort($port) {}

    /**
     * Set the amqp virtual host
     * Sets the virtual host to which to connect on the AMQP broker.
     * @param string $vhost
     * @return bool
     * @throws AMQPConnectionException if host is longer then 32characters.
     */
    public function setVhost($vhost) {}

}
