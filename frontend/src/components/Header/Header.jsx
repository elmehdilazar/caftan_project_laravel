import './Header.css';

function Header(){

    return(
        <>
         <div className="top-header">
            <div className="container">
                <div className="row">
                    <nav className="navbar navbar-expand-lg">
                        <div className="container-fluid">
                            <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list"></i></button>
                            <a className="navbar-brand" href="../index.html">Caftan Moderne</a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul className="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li className="nav-item">
                                        <a className="nav-link" href="../index.html">Acceuil</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link active" aria-current="page" href="#">Store</a>
                                    </li>
                                    <li className="nav-item dropdown">
                                        <a className="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Nos produits sur mesure
                                        </a>
                                        <ul className="dropdown-menu">
                                            <li className="nav-item">
                                                <a className="nav-link dropdown-item" href="#">Création personnalisée</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link dropdown-item" href="#">Caftan</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link dropdown-item" href="#">Jellaba</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link dropdown-item" href="#">Combinaison et tailleur</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link dropdown-item" href="#">Robes</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link dropdown-item" href="#">Takchita</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link dropdown-item" href="#">Nouveautés</a>
                                            </li>
                                            <li className="nav-item">
                                                <a className="nav-link dropdown-item" href="#">Bijoux et accessoires</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link" href="#">Contactez-nous</a>
                                    </li>
                                </ul>
                            </div>
                            <div className="nav-icons">
                                <a href="../control-panel/index.html" class="icon acc">
                                    <i className="bi bi-person"></i>
                                </a>
                                <a href="#" className="icon fav">
                                    <i className="bi bi-heart"></i>
                                </a>
                                <a href="../cart/index.html" class="icon cart">
                                    <i className="bi bi-cart2"></i>
                                    <span className="cart-num">3</span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </>
    )
}
export default Header;