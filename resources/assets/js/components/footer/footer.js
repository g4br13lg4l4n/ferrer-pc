import React from 'react'
import Logo from '../../../img/ferrer.png'

export const Footer = () => {
  return (
    <footer className="footer">
      <div className="footer-content">
        <form className="footer-content-form">
          <h3>Contactanos</h3>
          
            <input type="text" placeholder="Nombre"/>
            <input type="text" placeholder="Telefono"/>
            <input type="text" placeholder="Mensaje"/>
            
            <div className="footer-section">
              <p>*Máximo 450 carácteres</p>
              <input type="submit"></input>
            </div>
          
        </form>

        <div className="footer-information">
          <img src={Logo} className="footer-img"/>
          <p>Encuentranos</p>
          <p>Paseo Tabasco 230 Col. Centro.</p>
          <p>Mariano Arista 108 Col. Municipal.</p>
          <p>Mariano Arista 108 Col. Municipal</p>
        </div>

        <div>
          <p>COTIZACIONES EN LINEA</p>
          <p>Paseo Tabasco 230 Col. Centro.</p>
          <p>Mariano Arista 108 Col. Municipal.</p>
          <p>Mariano Arista 108 Col. Municipal</p>
          <p>Encuentranos</p>
        </div>

      </div>
      <p>Condiciones de usoAviso de privacidad© 1996-2017, FERRER PC.com, Inc. o afiliados. Todos los derechos reservados.</p>
    </footer>
  )
}
