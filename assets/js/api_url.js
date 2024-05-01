function api_url(api_file) {
    // Create url
    let [protocal, host, script] = [window.location.protocol, window.location.hostname, window.location.pathname];
    let curr_url = protocal + '//' + host + script;
    return curr_url.replace('index.php', 'api/' + api_file);
}