import React from 'react'
import HDD from '../../../img/discoduro.png'

//component's
import {FancyBox} from '../fancybox/fancybox'

export class Items extends React.Component{
  constructor (props) {
    super()
    this.state = {
      showFancy : true
    }

    this.data = props.product
    this.showFancy = this.showFancy.bind(this)
  }

  showFancy() {
    if(this.state.showFancy) {
      return (<FancyBox/>)
    }
  }

  render () {
    return (
      <div className="itemBox" onClick={this.showFancy}>
        <FancyBox/>
        <span className="itemBox-discount">
          <div className="itemBox-discount-contentDiscount">
            <p className="itemBox-discount-contentDiscount-percent">{this.data.discount}</p>
            <p className="itemBox-discount-contentDiscount-discountText">{this.data.desc}</p>
          </div>
        </span>
        <img src={this.data.img} alt={this.data.alt} className="itemBox-img"/>
        <section className="itemBox-productDescription">
          <h3 className="itemBox-productDescription-name">{this.data.name}</h3>
          <span className="itemBox-productDescription-priceDesc">$ {this.data.priceDesc}</span>
          <span className="itemBox-productDescription-price">$ {this.data.price}</span>
        </section>
      </div>
    )
  }
}
