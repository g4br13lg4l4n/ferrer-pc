import React from 'react'
import HDD from '../../../img/discoduro.png'

export const Items = (props) => {  

  return (
    <div className="itemBox">
      <span>
        <p>{props.product.desc}</p>
        <p>{props.product.discount}</p>
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
