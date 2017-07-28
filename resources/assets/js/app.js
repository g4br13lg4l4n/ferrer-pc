import '../css/index.css'
import React from 'react'
import {render} from 'react-dom'

import {Button} from './components/button.js'

class App extends React.Component {

  render () {
    return (
      <div>
        <h1>Component</h1>
        <Button/>
      </div>
    )
  }
}

render(<App/>, document.getElementById('app'))

