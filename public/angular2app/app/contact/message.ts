export default class Message {
    constructor(
        private from: {
            name: string,
            email: string
        },
        private message: string) { }
}