import './nav.css'
function Header(){

    return(
        <>
        <div class="top-banner">
            <span>Livraison offerte partout dans le monde à partir de <b>500dh</b></span>
        </div>
        <div class="sm-navbar-top">
            <div class="container">
                <div class="acc-sign">
                    <a href="../signup/index.html" class="sign-up-link"><i class="bi bi-person-plus"></i> Sign Up</a>
                    <a href="../signin/index.html" class="sign-in-link"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
                </div>
            </div>
        </div>
        </>
    )
}
export default Header;