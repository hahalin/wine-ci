var React = require('react');
var ReactDOM =require('react-dom');
var $=require('jquery');
//import "jquery";

var UserGist = React.createClass({
  getInitialState: function() {
    return {
      username: '',
      lastGistUrl: ''
    };
  },

  componentDidMount: function() {
    this.serverRequest = $.get(this.props.source, function (result) {
      var lastGist = result[0];
      this.setState({
        username: lastGist.owner.login,
        lastGistUrl: lastGist.html_url
      });
    }.bind(this));
  },

  componentWillUnmount: function() {
    this.serverRequest.abort();
  },

  render: function() {
    return (
      <div>
        {this.state.username} s last gist is
        <a href={this.state.lastGistUrl}>here</a>.
      </div>
    );
  }
});

var Pager = React.createClass({
  getInitialState: function() {
    return {
      current:1
    };
  },

  componentDidMount: function() {
    // this.serverRequest = $.get(this.props.source, function (result) {
    //   var lastGist = result[0];
    //   this.setState({
    //     username: lastGist.owner.login,
    //     lastGistUrl: lastGist.html_url
    //   });
    // }.bind(this));
  },

  componentWillUnmount: function() {
    this.serverRequest.abort();
  },
  handleChange:function(e) {
        // set the state regardless of value so the input's text changes
        
        if (this.state.current != e.target.value)
        {
        	this.setState({message:'loading...'});
        	this.serverRequest = $.get("../test/load?page="+e.target.value, function (result) {
        		this.setState({message:result});
        	}.bind(this));

        	this.setState({ current: e.target.value});
        }

  },  
  render: function() {
    return (
      <div>
        currentpage:{this.state.current}
        <input type="text" defaultValue={this.state.current}
         onChange={this.handleChange} 
        >
        </input>
        <label>
        {this.state.message} 
        </label>
      </div>
    );
  }
});


ReactDOM.render(
  <Pager></Pager>,
  document.getElementById('container')
);
