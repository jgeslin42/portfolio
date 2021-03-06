/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_print_words_tables.c                            :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: jgeslin <marvin@42.fr>                     +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2015/12/04 22:30:44 by jgeslin           #+#    #+#             */
/*   Updated: 2016/05/19 17:30:57 by jgeslin          ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "../includes/libft.h"

void	ft_print_words_tables(char **tab)
{
	int		i;

	i = -1;
	while (tab[++i])
		ft_printf("%s\n", tab[i]);
}
