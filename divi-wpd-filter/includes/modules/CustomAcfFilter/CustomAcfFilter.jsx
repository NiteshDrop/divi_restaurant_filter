// External Dependencies
import React, { Component } from 'react';

class CustomAcfFilter extends Component {

  static slug = 'custom_filter';
	/**
   * Handle input value change.
   *
   * @param {object} event
   */
  _onChange = (event) => {
    this.props._onChange(this.props.name, event.target.value);
  }
  render() {
    return (
      <div>
        <h2 className="dicm-title">{this.props.acffield}</h2>
      </div>
    );
  }
}

export default CustomAcfFilter;
