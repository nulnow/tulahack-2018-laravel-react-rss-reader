class MDinput extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            value: ""
        }

        this.onChange = this.onChange.bind(this);
        this.onInput = this.onChange;
    }

    onChange(event) {
        this.setState({
            value: event.target.value
        });
    }

    render() {
        return (
            <label className="PMD-label">

                <input
                    type={this.props.Type}
                    onChange={this.onChange}
                    onInput={this.onInput}
                    className="PMD-input"
                    required
                    name={this.props.Name}
                    value={this.state.value}
                />
                <span className={this.state.value ? 'PMD-span PMD-non-empty' : 'PMD-span PMD-empty'}>{this.props.Label}</span>

            </label>
        );
    }
}

class MDbutton extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <button className="PMD-button" type={this.props.Type} onClick={this.props.onClick}>{this.props.children}</button>
        );
    }
}

class LoginForm extends React.Component {
    render() {
        return (
            <React.Fragment>
                <form className="PMD-form" method="POST">
                    <h1>Login:</h1>
                    <MDinput Name="email" Label="Email" Type="email" />
                    <MDinput Name="password" Label="Password" Type="password" />
                    <MDbutton Type="submit">Login</MDbutton>
                </form>
            </React.Fragment>
        );
    }
}

class RegisterForm extends React.Component {
    render() {
        return (
            <React.Fragment>
                <form className="PMD-form" method="POST" action="/register">
                    <h1>Register:</h1>
                    <MDinput Name="name" Label="Name" Type="text" />
                    <MDinput Name="email" Label="Email" Type="email" />
                    <MDinput Name="password" Label="Password" Type="password" />
                    <MDinput Name="password_confirmation" Label="Password" Type="password" />
                    <MDbutton Type="submit">Register</MDbutton>
                </form>
            </React.Fragment>
        );
    }
}

if (document.getElementById('login-form')) {
    ReactDOM.render(<LoginForm />, document.querySelector('#login-form'));
}

if (document.getElementById('register-form')) {
    ReactDOM.render(<RegisterForm />, document.querySelector('#register-form'));
}