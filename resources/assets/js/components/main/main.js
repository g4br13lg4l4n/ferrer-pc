import React from 'react'

import {Category} from '../category/category'
import {Items} from '../items/items'

export const Main = () => {
  return (
    <section>
      <div>
        <Category/>
      </div>
      <div>
        <Items/>
      </div>
    </section>
  )
}
