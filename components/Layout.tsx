import * as React from 'react';
import Head from 'next/head';
import Container from '@material-ui/core/Container';
import Menu from '../components/Menu';


interface Props {
	title?: string;
}

const Layout: React.FunctionComponent<Props> = ({
	children,
	title = 'This is the default title',
}): JSX.Element => (
	<Container maxWidth={false} >
		<Head>
			<title>{title}</title>
		</Head>
		<header>
			<Menu />
		</header>
		{children}
		<footer>
			<hr />
			<span>I&apos;m here to stay (Footer)</span>
		</footer>
	</Container>
);

export default Layout;
