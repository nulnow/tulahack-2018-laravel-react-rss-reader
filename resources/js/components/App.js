import React, { Component } from 'react';
import ButtonAdd  from './ButtonAdd';

export default class App extends Component {
    constructor(props) {
        super(props);

        this.state = {
            title: "RSS reader"
        };
    }
    render() {
        return (
            <React.Fragment>
                <div className="left-panel">
                    <div className="left-panel__logo-section">RSS reader</div>
                </div>
                <div className="page-container">
                    <div className="page">
                        <h1>Атрибут autocomplete</h1>
                        <p>Этот атрибут помогает заполнять поля форм текстом, который был введён в них ранее. Значения сохраняет и подставляет браузер, при этом автозаполнение по соображениям безопасности может отключаться пользователем в настройках и не может в таком случае управляться атрибутом autocomplete. К примеру, включение автозаполнения в браузере Chrome показано на рис. 1.</p>
                        <h1>Атрибут autocomplete</h1>
                        <p>Этот атрибут помогает заполнять поля форм текстом, который был введён в них ранее. Значения сохраняет и подставляет браузер, при этом автозаполнение по соображениям безопасности может отключаться пользователем в настройках и не может в таком случае управляться атрибутом autocomplete. К примеру, включение автозаполнения в браузере Chrome показано на рис. 1.</p>
                        <h1>Атрибут autocomplete</h1>
                        <p>Этот атрибут помогает заполнять поля форм текстом, который был введён в них ранее. Значения сохраняет и подставляет браузер, при этом автозаполнение по соображениям безопасности может отключаться пользователем в настройках и не может в таком случае управляться атрибутом autocomplete. К примеру, включение автозаполнения в браузере Chrome показано на рис. 1.</p>
                        <h1>Атрибут autocomplete</h1>
                        <p>Этот атрибут помогает заполнять поля форм текстом, который был введён в них ранее. Значения сохраняет и подставляет браузер, при этом автозаполнение по соображениям безопасности может отключаться пользователем в настройках и не может в таком случае управляться атрибутом autocomplete. К примеру, включение автозаполнения в браузере Chrome показано на рис. 1.</p>

                    </div>
                </div>
                <ButtonAdd />
            </React.Fragment>
        );
    }
}