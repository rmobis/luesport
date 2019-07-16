import * as React from 'react';

import { User } from '../interfaces';

interface ListDetailProps {
	item: User;
}

const ListDetail: React.FunctionComponent<ListDetailProps> = ({
	item: user,
}): JSX.Element => (
	<div>
		<h1>Detail for {user.name}</h1>
		<p>ID: {user.id}</p>
	</div>
);

export default ListDetail;
