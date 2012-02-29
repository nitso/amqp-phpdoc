<?php
/**
 * Represents a channel on an connection. Each connection can have multiple channels.
 */
class AMQPChannel {
    /**
     * Commit an existing transaction.
     * AMQPChannel::startTransaction() must be called prior to this.
     * @see AMQPChannel::startTransaction()
     * @return bool
     * @throws AMQPChannelException exception if no transaction was started prior to calling this method.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function commitTransaction() {}

    /**
     * Create an instance of an AMQPQueue object
     * @param AMQPConnection $amqp_connection
     * @return AMQPChannel
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function __construct(AMQPConnection $amqp_connection) {}

    /**
     * Check the channel connection
     * @return bool
     */
    public function isConnected() {}

    /**
     * Set the Quality Of Service settings for the given channel
     * Specify the amount of data to prefetch in terms of window size (octets) or number of messages from a queue
     * during a AMQPQueue::consume() or AMQPQueue::get() method call. The client will prefetch data up to size octets
     * or count messages from the server, whichever limit is hit first.<br>
     * Setting either value to 0 will instruct the client to ignore that particular setting.<br>
     * A call to AMQPChannel::qos() will overwrite any values set by calling AMQPChannel::setPrefetchSize()
     * and AMQPChannel::setPrefetchCount().<br>
     * If the call to either AMQPQueue::consume() or AMQPQueue::get() is done with the AMQP_AUTOACK flag set,
     * the client will not do any prefetching of data, regardless of the QOS settings.
     * @param int $size
     * @param int $count
     * @return bool
     * @see AMQPChannel::setPrefetchCount()
     * @see AMQPQueue::consume()
     * @see AMQPQueue::get()
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function qos($size , $count) {}

    /**
     * Rollback a transaction
     * Rollback an existing transaction. AMQPChannel::startTransaction() must be called prior to this.
     * @return bool
     * @throws AMQPChannelException exception if no transaction was started prior to calling this method.
     * @throws AMQPConnectionException if the connection to the broker was lost.
     * @see AMQPChannel::startTransaction()
     * @see AMQPChannel::commitTransaction()
     */
    public function rollbackTransaction() {}

    /**
     * Set the number of messages to prefetch from the broker
     * Set the number of messages to prefetch from the broker during a call to AMQPQueue::consume() or AMQPQueue::get().
     * Any call to this method will automatically set the prefetch window size to 0, meaning that the prefetch
     * window size setting will be ignored. <br>
     * If the call to either AMQPQueue::consume() or AMQPQueue::get() is done with the AMQP_AUTOACK flag set,
     * this setting will be ignored.
     * @param int $count The number of messages to prefetch.
     * @return bool
     * @see AMQPQueue::consume()
     * @see AMQPQueue::get()
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function setPrefetchCount($count) {}

    /**
     * Set the window size to prefetch from the broker
     * Set the prefetch window size, in octets, during a call to AMQPQueue::consume() or AMQPQueue::get().
     * Any call to this method will automatically set the prefetch message count to 0,
     * meaning that the prefetch message count setting will be ignored. <br>
     * If the call to either AMQPQueue::consume() or AMQPQueue::get() is done with the AMQP_AUTOACK flag set,
     * this setting will be ignored.
     * @param int $size The window size, in octets, to prefetch.
     * @return bool
     * @see AMQPQueue::consume()
     * @see AMQPQueue::get()
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function setPrefetchSize($size) {}

    /**
     * Start a transaction
     * This method must be called on the given channel prior to calling AMQPChannel::commitTransaction() or
     * AMQPChannel::rollbackTransaction().
     * @return bool
     * @see AMQPChannel::commitTransaction()
     * @see AMQPChannel::rollbackTransaction()
     * @throws AMQPConnectionException if the connection to the broker was lost.
     */
    public function startTransaction() {}
}
