import React from 'react'

export class Categories extends React.Component {
  constructor () {
    super ()
    this.state = {
      addClass : false
    }

    this.showSubcategories = this.showSubcategories.bind(this)
  }

  showSubcategories() {
    this.setState({
      addClass : !this.state.addClass
    })
    console.log(this.state.addClass)
  }

  render () {
    return (
      <h1 
      onClick={this.showSubcategories}
      className={this.state.addClass ? 'test':''}>Soy una propiedad</h1>
    )
  }
}
