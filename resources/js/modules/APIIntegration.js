export class ApiClient {
    baseUrl;
    token;

    constructor() {
        sessionStorage.setItem(
            "bearerToken",
            "4|H5WESr9bORd2WCAGW1H33aoSq8lpO3nHsnfas90v33a72cd7"
        );
        this.baseUrl = "http://localhost/api/";
        this.token = "Bearer " + sessionStorage.getItem("bearerToken");
    }

    // constructor(baseUrl, token) {
    //     this.baseUrl = baseUrl;
    //     this.token = token;
    // }

    async get(endpoint, params = {}) {
        const url = new URL(endpoint, this.baseUrl);
        console.log(url);
        Object.keys(params).forEach((key) =>
            url.searchParams.append(key, params[key])
        );
        const response = await fetch(url, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Authorization: this.token,
            },
        });
        return await response.json();
    }

    async post(endpoint, data = {}) {
        const response = await fetch(`${this.baseUrl}${endpoint}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Authorization: $this.token,
            },
            body: JSON.stringify(data),
        });
        return await response.json();
    }

    async put(endpoint, data = {}) {
        const response = await fetch(`${this.baseUrl}${endpoint}`, {
            method: "PUT",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data),
        });
        return await response.json();
    }

    async delete(endpoint) {
        const response = await fetch(`${this.baseUrl}${endpoint}`, {
            method: "DELETE",
        });
        return await response.json();
    }
}
