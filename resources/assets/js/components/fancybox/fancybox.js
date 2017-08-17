import React from 'react'

// util's
import {utils} from '../../utils/utils'

export const FancyBox = () => {
  console.log(utils.items())
  let data = utils.items()

  return (
    <div id="fancybox" className="fadeIn animated">
      <div className="fancybox-wrap">
        <a href="javascript:;" className="fancybox-close"></a>
        <div className="form-box">
          <h2>Mostrar detalles</h2>
          <div className="form-image">
            <h1>{data.name}</h1>
          </div>
          <div className="form-group">
            <label>{data.name}</label>
            <input type="text"/>
          </div>
          
        </div>
      </div>
    </div>
  )
}
