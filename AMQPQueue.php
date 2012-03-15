<?php
/**
 * Represents an AMQP queue.
 * @method int declare() Declare a new queue on the broker.
 */
class AMQPQueue {
    /**
     * Acknowledge the receipt of a message
     * @param int $delivery_tag The message delivery tag of which to acknowledge receipt.
     * @param int $flags The only valid flag that can be passed is AMQP_MULTIPLE.
     * @return bool
     */
    public function ack($delivery_tag, $flags = AMQP_NOPARAM) {}

    /**
     * Bind the given queue to a routing key on an exchange.
     * @param string $exchange_name
     * @param string $routing_key
     * @return bool
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function bind($exchange_name, $routing_key) {}

    /**
     * Cancel a queue binding.
     * @param string $consumer_tag
     * @return bool
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function cancel($consumer_tag = "") {}

    /**
     * Create an instance of an AMQPQueue object
     * @param AMQPChannel $amqp_channel
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function __construct(AMQPChannel $amqp_channel) {}

    /**
     * Consume messages from a queue
     * Blocking function that will retrieve the next message from the queue as it becomes available and will pass it
     * off to the callback. <br>
     * The AMQPQueue::consume() will not return the processing thread back to the PHP script
     * until the callback function returns FALSE.
     * @param callback $callback A callback function must accept at a minimum one parameter, an AMQPEnvelope object,
     * and an optional second parameter the AMQPQueue from which the message was consumed.
     * @param int $flags
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function consume($callback, $flags = AMQP_NOPARAM) {}

    /**
     * Delete a queue and its contents.
     * Delete a queue from the broker, including its entire contents of unread or unacknowledged messages.
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     * @return bool
     */
    public function delete() {}

    /**
     * Retrieve the next message from the queue.
     * If no messages are present in the queue, this function will return FALSE immediately.
     * This is a non blocking alternative to the AMQPQueue::consume() method.<br>
     * Currently, the only supported flag for the flags parameter is AMQP_AUTOACK.<br>
     * If this flag is passed in, then the message returned will automatically be marked as acknowledged by the broker
     * as soon as the frames are sent to the client.
     * If this value is not provided, it will use the value of amqp.auto_ack.
     * @param int $flags A bitmask of supported flags for the method call.
     */
    public function get($flags = AMQP_NOPARAM) {}

    /**
     * Get the argument associated with the given key
     * @param $key
     * @return mixed The string or integer value associated with the given key, or FALSE if the key is not set.
     */
    public function getArgument($key) {}

    /**
     * Get all arguments set on the given queue
     * @return array containing all of the set key/value pairs.
     */
    public function getArguments() {}

    /**
     * Get the flag bitmask
     * @return int bitmask of all the flags currently set on this exchange object.
     */
    public function getFlags() {}

    /**
     * Get the configured name
     * @return string
     */
    public function getName() {}

    /**
     * Mark a message as explicitly not acknowledged.
     * This method can only be called on messages that have not yet been acknowledged, meaning that messages retrieved
     * with by AMQPQueue::consume() and AMQPQueue::get() and using the AMQP_AUTOACK flag are not eligible.<br>
     * When called, the broker will immediately put the message back onto the queue,
     * instead of waiting until the connection is closed.<br>
     * This method is only supported by the RabbitMQ broker.
     * The behavior of calling this method while connected to any other broker is undefined.
     *
     * @param string $delivery_tag The delivery tag by which to identify the message.
     * @param int $flags A bitmask of flags.
     * @see AMQPQueue::consume()
     * @see AMQPQueue::get()
     */
    public function nack($delivery_tag, $flags = AMQP_NOPARAM) {}

    /**
     * Purge the contents of a queue
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     * @return bool
     */
    public function purge() {}

    /**
     * Set the value for the given key
     * @param string $key
     * @param mixed $value
     */
    public function setArgument($key, $value) {}

    /**
     * Set all arguments on the queue
     * All other argument settings will be wiped.
     * @param array $arguments An array of key/value pairs of arguments.
     */
    public function setArguments($arguments) {}

    /**
     * Set the queue flags
     * This call currently only supports a bitmask of the following flags:
     * AMQP_DURABLE, AMQP_PASSIVE, AMQP_EXCLUSIVE, AMQP_AUTODELETE.
     * @param int $flags A bitmask of flags.
     */
    public function setFlags($flags) {}


    /**
     * Set the queue name
     * @param string $queue_name The name of the queue as a string.
     */
    public function setName($queue_name) {}

    /**
     * Unbind the queue from a routing key.
     * @param string $exchange_name The name of the exchange on which the queue is bound.
     * @param string $routing_key The binding routing key used by the queue.
     * @throws AMQPChannelException if the channel is not open.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     * @return bool
     */
    public function unbind($exchange_name, $routing_key) {}
}
