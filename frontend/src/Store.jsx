import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import './Store.css';
import Nav from './components/nav-bar/Nav';
import Header from './components/Header/Header';
import Slide from './components/Slide/Slide';
function Store(){
    

    return(
        <>
        <Nav/>
        <Header/>
        <Slide/>
        </>
    )
}
export default Store;