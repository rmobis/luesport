/* @jsx jsx */
import Link from 'next/link';
import Layout from '../components/Layout';
import { NextPage } from 'next';
import { jsx } from '@emotion/core';
import Typography from '@material-ui/core/Typography';

// import Box from '@material-ui/core/Box';
// import MuiLink from '@material-ui/core/Link';


const IndexPage: NextPage = (): JSX.Element => {
	return (
		<Layout>
			<Typography variant="h4" component="h1" gutterBottom>
				Next.js v4-beta example
			</Typography>
			<p>
				<Link href="/about">
					<a>About</a>
				</Link>
			</p>
		</Layout>
	);
};

export default IndexPage;
