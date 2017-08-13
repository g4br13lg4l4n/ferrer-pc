import React from 'react'

import {Items} from './items'
export class Subcategories extends React.Component {
  constructor (props) {
    super()
    this.state = {
      showItems : false
    }
    this.subcategories = props.data

    this.showItems = this.showItems.bind(this)
  }

  showItems() {
    this.setState({
      showItems : !this.state.showItems
    })
    console.log(this.state.showItems)
  }

  render () {
    return (
      <li onClick={this.showItems}>
        <a>{this.subcategories}</a>
      </li>
    )
  }
}