import React from 'react'
import ImageGallery from 'react-image-gallery';
import banner from '../../../img/banner.png'

export class Gallery extends React.Component {

  constructor () {
    super()
  }

  handleImageLoad(event) {
    console.log('Image loaded ', event.target)
  }

  render () {

    let images = [
      {
        original: banner,
      },
      {
        original: banner
      },
      {
        original: banner,
      },
      {
        original: banner,
      },
      {
        original: banner
      },
      {
        original: banner
      },
    ]
    return(
      <div>
        <ImageGallery items={images} slideInterval={3000} onImageLoad={this.handleImageLoad} showThumbnails={false} showBullets={true}
        showPlayButton={false} autoPlay={true} disableArrowKeys={false} slideDuration={6000} showNav={false} showFullscreenButton={false}/>
      </div>
    )

  }
}
