// External Dependencies
import React, { Component } from 'react';

class CustomWpdBlog extends Component {

  static slug = 'custom_wpd_blog';

  /**
   * Module render in VB
   * Basically DICM_CTA_Has_VB_Support->render() equivalent in JSX
   */
  render() {
    return (
      <div>
        <h2 className="dicm-title">{this.props.category}</h2>
      </div>
    );
  }
}

export default CustomWpdBlog;
