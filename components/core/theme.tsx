import { createMuiTheme } from '@material-ui/core/styles';
import { pink, indigo } from '@material-ui/core/colors';

// Create a theme instance.
const theme = createMuiTheme({
	palette: {
		primary: pink,
		secondary: indigo
	},
});

export default theme;
