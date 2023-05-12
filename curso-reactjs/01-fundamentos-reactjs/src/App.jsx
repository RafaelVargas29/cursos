import { Post } from "./Post";
import { Header } from "./components/Header";
import { Sidebar } from "./components/Sidebar";

import style from './App.module.css';
import './global.css';

export function App() {
  return (
    <div>
      <Header />

      <div className={style.wrapper}>
       <Sidebar />
        <main>
          <Post 
            author="Rafael Vargas" 
            content="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis saepe totam accusamus consectetur quod distinctio, doloremque quas numquam, tempore quo corrupti temporibus pariatur laboriosam? Dolorem, suscipit! Sequi unde totam nemo!"
          />
          
          <Post 
            author="Cassiane Silva"
            content="Um novo post."
          />
        </main>
      </div>
    </div>
  )
}

