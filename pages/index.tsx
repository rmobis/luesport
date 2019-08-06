import React from 'react';
import Link from 'next/link';
import Layout from 'components/core/Layout';
import { NextPage } from 'next';
import Typography from '@material-ui/core/Typography';

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
