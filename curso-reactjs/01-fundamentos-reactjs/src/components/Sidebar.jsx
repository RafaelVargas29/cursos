import styles from './Sidebar.module.css';

export function Sidebar() {
    return (
        <aside className={styles.sidebar}>
            <img className={styles.cover} src="https://images.unsplash.com/photo-1522252234503-e356532cafd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGV2ZWxvcGVyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=40"/>

            <div className={styles.profile}>
                <strong>Rafael Vargas</strong>
                <span>Web Developer</span>
            </div>

            <footer>
                <a href="#">
                    Editar seu perfil
                </a>
            </footer>
        </aside>
    )
}