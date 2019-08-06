import React from 'react';
import { createStyles, makeStyles, Theme } from '@material-ui/core/styles';
import ListItemIcon from '@material-ui/core/ListItemIcon';

interface Props {
	src: string;
	alt?: string;
}

const useStyles = makeStyles((theme: Theme) => createStyles({
	root: {
		textAlign: 'left'
	},
	iconImage: {
		width: '1em',
		height: '1em',
		fontSize: '1.75em',
		color: theme.palette.text.secondary
	}
}));

const CustomListItemIcon: React.FunctionComponent<Props> = ({ src, alt = '' }) => {
	const classes = useStyles();

	return (
		<ListItemIcon className={classes.root} >
			<img src={src} alt={alt} className={classes.iconImage} />
		</ListItemIcon>
	);
};

export default CustomListItemIcon;
