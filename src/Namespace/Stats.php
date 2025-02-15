<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Stats
{
    /**
     * Get [channel statistics](https://core.telegram.org/api/stats).
     *
     * @param bool $dark Whether to enable dark theme for graph colors
     * @param array|int|string $channel The channel @see https://docs.madelineproto.xyz/API_docs/types/InputChannel.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'stats.broadcastStats', period: array{_: 'statsDateRangeDays', min_date: int, max_date: int}, followers: array{_: 'statsAbsValueAndPrev', current: float, previous: float}, views_per_post: array{_: 'statsAbsValueAndPrev', current: float, previous: float}, shares_per_post: array{_: 'statsAbsValueAndPrev', current: float, previous: float}, enabled_notifications: array{_: 'statsPercentValue', part: float, total: float}, growth_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, followers_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, mute_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, top_hours_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, interactions_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, iv_interactions_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, views_by_source_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, new_followers_by_source_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, languages_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, recent_message_interactions: list<array{_: 'messageInteractionCounters', msg_id: int, views: int, forwards: int}>} @see https://docs.madelineproto.xyz/API_docs/types/stats.BroadcastStats.html
     */
    public function getBroadcastStats(bool|null $dark = false, array|int|string|null $channel = null, ?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Load [channel statistics graph](https://core.telegram.org/api/stats) asynchronously.
     *
     * @param string $token Graph token from [statsGraphAsync](https://docs.madelineproto.xyz/API_docs/constructors/statsGraphAsync.html) constructor
     * @param int $x Zoom value, if required
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string} @see https://docs.madelineproto.xyz/API_docs/types/StatsGraph.html
     */
    public function loadAsyncGraph(string|null $token = '', int|null $x = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Get [supergroup statistics](https://core.telegram.org/api/stats).
     *
     * @param bool $dark Whether to enable dark theme for graph colors
     * @param array|int|string $channel [Supergroup ID](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/InputChannel.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'stats.megagroupStats', period: array{_: 'statsDateRangeDays', min_date: int, max_date: int}, members: array{_: 'statsAbsValueAndPrev', current: float, previous: float}, messages: array{_: 'statsAbsValueAndPrev', current: float, previous: float}, viewers: array{_: 'statsAbsValueAndPrev', current: float, previous: float}, posters: array{_: 'statsAbsValueAndPrev', current: float, previous: float}, growth_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, members_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, new_members_by_source_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, languages_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, messages_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, actions_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, top_hours_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, weekdays_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}, top_posters: list<array{_: 'statsGroupTopPoster', user_id: int, messages: int, avg_chars: int}>, top_admins: list<array{_: 'statsGroupTopAdmin', user_id: int, deleted: int, kicked: int, banned: int}>, top_inviters: list<array{_: 'statsGroupTopInviter', user_id: int, invitations: int}>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/stats.MegagroupStats.html
     */
    public function getMegagroupStats(bool|null $dark = false, array|int|string|null $channel = null, ?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Obtains a list of messages, indicating to which other public channels was a channel message forwarded.
     * Will return a list of [messages](https://docs.madelineproto.xyz/API_docs/constructors/message.html) with `peer_id` equal to the public channel to which this message was forwarded.
     *
     * @param array|int|string $channel Source channel @see https://docs.madelineproto.xyz/API_docs/types/InputChannel.html
     * @param int $msg_id Source message ID
     * @param int $offset_rate Initially 0, then set to the `next_rate` parameter of [messages.messagesSlice](https://docs.madelineproto.xyz/API_docs/constructors/messages.messagesSlice.html)
     * @param array|int|string $offset_peer [Offsets for pagination, for more info click here](https://core.telegram.org/api/offsets) @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param int $offset_id [Offsets for pagination, for more info click here](https://core.telegram.org/api/offsets)
     * @param int $limit Maximum number of results to return, [see pagination](https://core.telegram.org/api/offsets)
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'messages.messages', messages: list<array>, chats: list<array>, users: list<array>}|array{_: 'messages.messagesSlice', inexact: array, count: array, next_rate: array, offset_id_offset: array, messages: list<array>, chats: list<array>, users: list<array>}|array{_: 'messages.channelMessages', inexact: array, pts: array, count: array, offset_id_offset: array, messages: list<array>, topics: list<array>, chats: list<array>, users: list<array>}|array{_: 'messages.messagesNotModified', count: array} @see https://docs.madelineproto.xyz/API_docs/types/messages.Messages.html
     */
    public function getMessagePublicForwards(array|int|string|null $channel = null, int|null $msg_id = 0, int|null $offset_rate = 0, array|int|string|null $offset_peer = null, int|null $offset_id = 0, int|null $limit = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Get [message statistics](https://core.telegram.org/api/stats).
     *
     * @param bool $dark Whether to enable dark theme for graph colors
     * @param array|int|string $channel Channel ID @see https://docs.madelineproto.xyz/API_docs/types/InputChannel.html
     * @param int $msg_id Message ID
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'stats.messageStats', views_graph: array{_: 'statsGraphAsync', token: string}|array{_: 'statsGraphError', error: string}|array{_: 'statsGraph', json: mixed, zoom_token: string}} @see https://docs.madelineproto.xyz/API_docs/types/stats.MessageStats.html
     */
    public function getMessageStats(bool|null $dark = false, array|int|string|null $channel = null, int|null $msg_id = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;
}
