class Fetch {
  baseURL = "";

  constructor(baseURL) {
    this.baseURL = baseURL;
  }

  async request(endpoint, method = "GET", data = null, headers = {}) {
    const url = `${this.baseURL}${endpoint}`;

    console.log(url);

    const config = {
      method,
      headers: {
        "Content-Type": "application/json",
        ...headers,
      },
    };

    if (data) {
      config.body = JSON.stringify(data);
    }

    try {
      const response = await fetch(url, config);

      if (!response.ok) {
        throw new Error("HTTP error! status: ${response.status}");
      }

      return await response.json();
    } catch (error) {
      console.error("FetchAPI request error:", error);

      throw error;
    }
  }

  get(endpoint, headers = {}) {
    return this.request(endpoint, "GET", null, headers);
  }

  post(endpoint, data, headers = {}) {
    return this.request(endpoint, "POST", data, headers);
  }

  put(endpoint, data, headers = {}) {
    return this.request(endpoint, "PUT", headers);
  }

  delete(endpoint, headers = {}) {
    return this.request(endpoint, "DELETE", null, headers);
  }
}
