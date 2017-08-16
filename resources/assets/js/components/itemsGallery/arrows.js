import React from 'react'
import TransitionGroup from 'react-addons-css-transition-group'

import Items from '../category/items'
import {fillArray} from '../../utils/utils'

export class Slide extends React.Component {
  constructor(props) {
    super(props)

    this.handleAdd = this.handleAdd.bind(this)
  }


  handleAdd() {
    return (
      <div>
        {fillArray(2).map( (el, i) => {
          <h1>xD</h1>
        })}
      </div>
    )
  }

  render() {
    return (
      <div>
        <TransitionGroup
          transitionName="example"
          transitionEnterTimeout={1000}
          transitionLeaveTimeout={3000}>
          {this.handleAdd()}
        </TransitionGroup>
      </div>
    );
  }
}
