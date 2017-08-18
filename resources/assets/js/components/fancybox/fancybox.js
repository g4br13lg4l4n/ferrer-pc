import React from 'react'

// util's
import {utils} from '../../utils/utils'

export const FancyBox = (props) => {

  let data = props.data || utils.items()

  return (
    <div id="fancybox" className="fadeIn animated">
      <div className="fancybox-wrap">
        <a href="#" className="fancybox-close"></a>
        <div className="form-box">

          <div className="form-image">
            <img src={data.img}/>
          </div>

          <div className="form-group">
            <h3 className="form-group--title">{data.name}</h3>
            <h4 className="form-group--price">$ {data.price}</h4>
            <ul>
              {data.skills.map( (el, i) => {
                return <li className="form-group--list" key={i}>{el}</li>
              })}
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  )
}
