import React from 'react'
import ferrerLogo from '../../../img/ferrer.png'

export class Navbar extends React.Component {
  constructor (props) {
    super()
    this.datos = ["Nuestras Instalaciones", "Ordenes de Servicio", "Facturas", "Contacto"]
  }

  render () {
    return (
      <nav className="navbar">
        <div className="">
          <img src={ferrerLogo} alt="Ferrer PC"/>
          <h1>FERRER PC</h1>
          <i className="fa fa-user-o" aria-hidden="true"></i>
        </div>

        <div className="menu">
          <ul>
            {this.datos.map( (el,i) => <li key={i}><a href="#">{el}</a></li> )}
          </ul>

          <input type="search"/>
        </div>
      </nav>
    )
  }
}
