export default class Gate {
    constructor(user) {
        this.user = user;
    }

    isAdmin() {
        return this.user.role === "admin";
    }

    isCleaner() {
        return this.user.role === "cleaner";
    }

    isCustomer() {
        return this.user.role === "customer";
    }
}
