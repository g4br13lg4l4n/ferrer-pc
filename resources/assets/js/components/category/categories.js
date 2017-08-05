import React from 'react'

export const Categories = (props) => {
  let show = props.show

  if (show === true) {
    return (
      <section>
        <ul>sere una seccion ekis de</ul>
      </section>
    )
  }

  return <h1>no mandaste nada perrooooo :v</h1>
}