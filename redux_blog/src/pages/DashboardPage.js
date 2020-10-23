import React from 'react';
import { Link } from 'react-router-dom';

const DashboardPage = () => (
  <section>
    <h1>Caixa mágica</h1>
    <p>Esta é uma caixa mágica de posts!</p>

    <Link to="/posts" className="button">
      Click aqui e você verá a magia acontecer!
    </Link>
  </section>
);

export default DashboardPage;