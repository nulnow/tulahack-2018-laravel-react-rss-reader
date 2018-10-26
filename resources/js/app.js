

import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import App from './components/App'

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}

document.api = (data, callback) => {
    fetch('/tools', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then((response)=> response.json())
    .then((resp) => {
        callback(resp);
    });
};