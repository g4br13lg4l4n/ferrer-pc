import React from 'react'
import HDD from '../../../img/discoduro.png'

export const Items = (props) => {  

  return (
    <div className="itemBox">
      <span className="itemBox-discount">
        <div className="itemBox-discount-contentDiscount">
          <p className="itemBox-discount-contentDiscount-percent">{props.product.discount}</p>
          <p className="itemBox-discount-contentDiscount-discountText">{props.product.desc}</p>
        </div>
      </span>
      <img src={props.product.img} alt={props.product.alt} className="itemBox-img"/>
      <section className="itemBox-productDescription">
        <h3 className="itemBox-productDescription-name">{props.product.name}</h3>
        <span className="itemBox-productDescription-priceDesc">$ {props.product.priceDesc}</span>
        <span className="itemBox-productDescription-price">$ {props.product.price}</span>
      </section>
    </div>
  )
}
