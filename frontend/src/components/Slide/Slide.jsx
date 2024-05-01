import './Slide.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import { useState } from 'react';
function Slide(){
    const slides =[
        {
            url:'https://qph.cf2.quoracdn.net/main-qimg-05352a7c3d2cf5bd80eccbbbaff6542b-lq'
        },
        {
            url:'https://st2.depositphotos.com/1875497/8419/i/450/depositphotos_84195168-stock-photo-morocco-architecture-style.jpg'
        }
        ]
    
        const [currentIndex, setCurrentIndex] = useState(0);
    
        const prevSlide = () => {
            const isFirstSlide = currentIndex === 0;
            const newIndex = isFirstSlide ? slides.length - 1 : currentIndex - 1;
            setCurrentIndex(newIndex);
          };
        
          const nextSlide = () => {
            const isLastSlide = currentIndex === slides.length - 1;
            const newIndex = isLastSlide ? 0 : currentIndex + 1;
            setCurrentIndex(newIndex);
          };
        
          const goToSlide = (slideIndex) => {
            setCurrentIndex(slideIndex);
          };
    return(
        <>
          <div className='Adiv'>
            <div style={{backgroundImage: `url(${slides[currentIndex].url})`}} className='Bdiv'>
            {/*LEFT ARROW*/}
            <div>
            <a onClick={prevSlide} className="arrow-left"><i className="bi bi-chevron-left"></i> </a>
            </div>
            {/*RIGHT ARROW*/}
            <div>
            <a onClick={nextSlide} className="arrow-right"><i className="bi bi-chevron-right"></i> </a>
            </div>
            </div>
        </div>
        </>
    )
}
export default Slide;