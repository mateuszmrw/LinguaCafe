import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

export default global = {
    namespaced: true,
    state: () => ({
        userUuid: '',
        userAdmin: false,
        echo: new Echo({
            broadcaster: 'pusher',
            key: 'wjp2pou6ebgibtwccqsj',
            cluster: 'mt1',
            forceTLS: false,
            wsHost: window.location.hostname,
            wsPort: 6001,
            enabledTransports: ['ws', 'wss'],
        })
    }),
    mutations: {
        setUuid (state, userUuid) {
            state.userUuid = userUuid;
        },
        setUserAdmin (state, userAdmin) {
            state.userAdmin = userAdmin;
        }
    },
    getters: {
        echo (state) {
            return state.echo;
        },
        userUuid(state) {
            return state.userUuid;
        },
        userAdmin(state) {
            return state.userAdmin;
        }
    }
}
