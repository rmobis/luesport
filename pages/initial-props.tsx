import { findAll } from '../utils/sample-api';
import { NextPage } from 'next';
import { User } from '../interfaces';
import * as React from 'react';
import Layout from '../components/Layout';
import Link from 'next/link';
import List from '../components/List';

interface Props {
	items: User[];
	pathname: string;
}

const WithInitialProps: NextPage<Props> = ({ items, pathname }): JSX.Element => (
	<Layout title="List Example (as Functional Component) | Next.js + TypeScript Example">
		<h1>List Example (as Function Component)</h1>
		<p>You are currently on: {pathname}</p>
		<List items={items} />
		<p>
			<Link href="/">
				<a>Go home</a>
			</Link>
		</p>
	</Layout>
);

WithInitialProps.getInitialProps = async ({ pathname }): Promise<Props> => {
	// Example for including initial props in a Next.js function component page.
	// Don't forget to include the respective types for any props passed into
	// the component.
	const items: User[] = await findAll();

	return { items, pathname };
};

export default WithInitialProps;
