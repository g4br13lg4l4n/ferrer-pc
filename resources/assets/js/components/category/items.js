import React from 'react'
import HDD from '../../../img/discoduro.png'

export const Items = () => {
  return (
    <div className="itemBox">
      <img src={HDD} alt="HardDisk" className="itemBox-img"/>
      <h3>Nombre del producto</h3>
    </div>
  )
}
