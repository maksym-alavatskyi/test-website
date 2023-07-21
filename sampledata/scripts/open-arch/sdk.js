const MESSAGE_TOKEN_IDENTIFIER = "apps_token";
const MessageTypes = {
    INIT_APP        : 'InitNewApp',
    GET_ALL_METRICS : 'GetAllMetrics',
    GET_ALL_DYNAMICS : 'GetAllMDynamic',
    GET_FILTER_SET  : 'GetFilterSet',
    GET_METRICS_BY_IDS : 'GetMetricsByIds',
    GET_DYNAMIC_BY_IDS : 'GetDynamicFieldsByIds',
};

class CTCommunicator {
    constructor() {
        let self = this;
        /** Attach CT Listener, Send Initial Message */
        window.addEventListener('message', self._handleReceivedMessages.bind(self), false);
        self._postParentMessage({init: true}, MessageTypes.INIT_APP);
    }
    _postParentMessage(messageObject, messageType) {
        let self = this;
        window.parent.postMessage({
            token: MESSAGE_TOKEN_IDENTIFIER,
            messageType,
            messageObject
        }, "*");
    }

    _handleReceivedMessages(event) {
        let self = this,
            eventMessageType = event.data.messageType;

        if(!self.registeredFunctions) {
            self.registeredFunctions = [];
        }

        if(self.registeredFunctions[eventMessageType]) {
            self.registeredFunctions[eventMessageType](event.data);
        }
    }

    _callToExternalFunction(messageType, messageObject, callback) {
        let self = this;
        self._postParentMessage(messageObject, messageType);

        if(!self.registeredFunctions) {
            self.registeredFunctions = [];
        }

        if(!self.registeredFunctions[messageType]) {
            self.registeredFunctions[messageType] = callback;
        }
    }

    getMetricIdsList(callback) {
        let self = this;
        self._callToExternalFunction(MessageTypes.GET_ALL_METRICS, {}, callback);
    }

    getDynamicIdsList(filterSet, callback) {
        console.warn("This function is not yet working, and will be in use in the upcoming version");
        let self = this;
        self._callToExternalFunction(MessageTypes.GET_ALL_DYNAMICS, {
            filters: filterSet
        }, callback);
    }

    getFilterSet(callback) {
        let self = this;
        self._callToExternalFunction(MessageTypes.GET_FILTER_SET, {}, callback);
    }

    getMetricsByIds(filterSet, ids, callback) {
        let self = this;
        self._callToExternalFunction(MessageTypes.GET_METRIC_BY_ID, {
            ids: ids,
            filters: filterSet
        }, callback);
    }

    getDynamicFieldsByIds(filterSet, ids, callback) {
        console.warn("This function is not yet working, and will be in use in the upcoming version");
        let self = this;
        self._callToExternalFunction(MessageTypes.GET_DYNAMIC_BY_IDS, {
            ids: ids,
            filters: filterSet
        }, callback);
    }
}

window.CTCommunicator = new CTCommunicator();