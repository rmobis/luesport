import * as React from 'react';
import ListItem from './ListItem';
import { User } from '../interfaces';

interface Props {
	items: User[];
}

const List: React.FunctionComponent<Props> = ({ items }): JSX.Element => (
	<ul>
		{items.map((item): JSX.Element => (
			<li key={item.id}>
				<ListItem data={item} />
			</li>
		))}
	</ul>
);

export default List;
