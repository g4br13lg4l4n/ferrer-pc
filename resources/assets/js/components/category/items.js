import React from 'react'
import HDD from '../../../img/discoduro.png'

export const Items = (props) => {  
  const data = props.product

  return (
    <div className="itemBox">
      <span className="itemBox-discount">
        <div className="itemBox-discount-contentDiscount">
          <p className="itemBox-discount-contentDiscount-percent">{data.discount}</p>
          <p className="itemBox-discount-contentDiscount-discountText">{data.desc}</p>
        </div>
      </span>
      <img src={data.img} alt={data.alt} className="itemBox-img"/>
      <section className="itemBox-productDescription">
        <h3 className="itemBox-productDescription-name">{data.name}</h3>
        <span className="itemBox-productDescription-priceDesc">$ {data.priceDesc}</span>
        <span className="itemBox-productDescription-price">$ {data.price}</span>
      </section>
    </div>
  )
}
