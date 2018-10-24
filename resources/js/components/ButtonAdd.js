import React, { Component } from 'react';

export default class ButtonAdd extends Component {
    constructor(props) {
        super(props);
        this.state = {
            active: false
        };

        this.onClick = this.onClick.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
    }

    onSubmit(event) {
        event.preventDefault();
        const value = document.getElementById('newLinkInput').value;
        if (!value) return;
        document.getElementById('newLinkInput').value = '';
        this.setState((state) => {
            return {
                active: false
            }
        });
    }

    onClick(event) {
        this.setState((state) => {
            return {
                active: !state.active
            }
        });
    }

    render() {
        return (
            <React.Fragment>
                <div className={ `PanelAdd ${this.state.active ? 'PanelAdd--active' : ''} `}>
                    <form onSubmit={this.onSubmit} className="PanelAdd__form" action="/api/add" method="post">
                        <input
                            autoComplete="off"
                            id="newLinkInput"
                            className="PanelAdd__field"
                            type="text"
                            placeholder="Вставьте ссылку на ленту"
                        />
                        <input className="PanelAdd__submit-button" type="submit" value="Добавить"/>
                    </form>

                </div>
                <button
                    onClick={this.onClick}
                    className={ `ButtonAdd ${this.state.active ? 'ButtonAdd--active' : ''} `}
                >
                    +
                </button>
            </React.Fragment>
        );
    }
}