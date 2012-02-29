<?php
/**
 * @method int declare() Declare a new exchange on the broker.
 * @throws AMQPExchangeException on failure.
 * @throws AMQPChannelException if the channel is not open.
 * @throws AMQPConnectionException if the connection to the broker was lost.
 */
class AMQPExchange {
    /**
     * Bind to another exchange
     * @param string $destination_exchange_name The name of the destination exchange in the binding.
     * @param string $source_exchange_name The name of the source exchange in the binding.
     * @param string $routing_key The routing key to use as a binding.
     * @return bool
     * @throws AMQPExchangeException on failure.
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function bind($destination_exchange_name, $source_exchange_name, $routing_key) {}

    /**
     * Create an instance of AMQPExchange
     * @param AMQPChannel $amqp_channel
     * @return AMQPExchange
     * @throws AMQPExchangeException when amqp_channel is not connected to a broker.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function __construct(AMQPChannel $amqp_channel) {}

    /**
     * Delete and exchange from the broker.
     * @param int $flags Optionally AMQP_IFUNUSED can be specified to indicate the exchange should
     * not be deleted until no clients are connected to it.
     * @return bool
     * @throws AMQPExchangeException on failure.
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function delete($flags = AMQP_NOPARAM) {}

    /**
     * Get the argument associated with the given key.
     * @param string $key
     * @return mixed
     */
    public function getArgument($key) {}

    /**
     * Get all arguments as an array of key/value pairs that are currently set on the given exchange.
     * @return array
     */
    public function getArguments() {}

    /**
     * Get all the flags currently set on the given exchange.
     * @return int
     */
    public function getFlags() {}

    /**
     * Get the configured name.
     * @return string
     */
    public function getName() {}

    /**
     * Get the configured type.
     * @return string
     */
    public function getType() {}

    /**
     * Publish a message to an exchange.
     * @param string $message
     * @param string $routing_key
     * @param int $flags One or more of AMQP_MANDATORY and AMQP_IMMEDIATE.
     * @param array $attributes
     * array(
     *    'Content-type'     => 'text/plain',
     *    'Content-encoding' => NULL,
     *    'message_id'       => NULL,
     *    'user_id'          => NULL,
     *    'app_id'           => NULL,
     *    'delivery_mode'    => NULL,
     *    'priority'         => NULL,
     *    'timestamp'        => NULL,
     *    'expiration'       => NULL,
     *    'type'             => NULL,
     *    'reply_to'         => NULL,
     * )
     * @return bool
     * @throws AMQPExchangeException on failure.
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function publish($message, $routing_key, $flags = AMQP_NOPARAM, $attributes = array()) {}

    /**
     * Set the key to the given value.
     * @param string $key
     * @param mixed $value
     */
    public function setArgument($key, $value) {}

    /**
     * Set all arguments on the exchange
     * All other argument settings will be wiped.
     * @param array $arguments
     */
    public function setArguments($arguments) {}

    /**
     * Set the flags on an exchange
     * This call currently only considers the following flag: AMQP_PASSIVE
     * @param int $flags A bitmask of flags.
     */
    public function setFlags($flags) {}

    /**
     * Set the name of the exchange
     * @param string $exchange_name
     */
    public function setName($exchange_name) {}

    /**
     * Set the type of the exchange
     * This can be any of AMQP_EX_TYPE_DIRECT, AMQP_EX_TYPE_FANOUT, AMQP_EX_TYPE_HEADER or AMQP_EX_TYPE_TOPIC.
     * @param string $exchange_type
     * @return string
     */
    public function setType($exchange_type) {}
}
