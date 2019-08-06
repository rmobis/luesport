import React from 'react';
import { createStyles, makeStyles, Theme } from '@material-ui/core/styles';
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import Button from '@material-ui/core/Button';
import IconButton from '@material-ui/core/IconButton';
import MenuIcon from '@material-ui/icons/Menu';
import clsx from 'clsx';
import { OpenDrawerProps } from 'interfaces';

const drawerWidth = 240;

const useStyles = makeStyles((theme: Theme) => createStyles({
	appBar: {
		zIndex: theme.zIndex.drawer + 1,
		transition: theme.transitions.create(['width', 'margin'], {
			easing: theme.transitions.easing.sharp,
			duration: theme.transitions.duration.leavingScreen,
		}),
	},
	appBarShift: {
		marginLeft: drawerWidth,
		width: `calc(100% - ${drawerWidth}px)`,
		transition: theme.transitions.create(['width', 'margin'], {
			easing: theme.transitions.easing.sharp,
			duration: theme.transitions.duration.enteringScreen,
		}),
	},
	menuButton: {
		marginRight: theme.spacing(2),
	},
	hide: {
		display: 'none',
	},
	title: {
		flexGrow: 1,
	},
}));

const Menu: React.FunctionComponent<OpenDrawerProps> = ({ open, setOpen }) => {
	const classes = useStyles();

	function handleDrawerOpen(): void {
		setOpen(true);
	}

	return (
		<React.Fragment>
			<AppBar position="fixed"
				className={clsx(classes.appBar, {
					[classes.appBarShift]: open
				})}>
				<Toolbar>
					<IconButton
						edge="start"
						color="inherit"
						aria-label="open drawer"
						onClick={handleDrawerOpen}
						className={clsx(classes.menuButton, {
							[classes.hide]: open,
						})}
					>
						<MenuIcon />
					</IconButton>
					<Typography variant="h6" className={classes.title}>
						Next.js v9 Example
					</Typography>

					<Button color="inherit">Home</Button>
					<Button color="inherit">About</Button>
				</Toolbar>
			</AppBar>
		</React.Fragment>
	);
};

export default Menu;
